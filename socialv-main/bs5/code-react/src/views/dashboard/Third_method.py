import cv2
import numpy as np
import scipy.signal as signal
import matplotlib.pyplot as plt
import scipy.fftpack as fftpack
import logging
import os



def load_video(video_path):
    cap=cv2.VideoCapture(video_path)
    frame_count = int(cap.get(cv2.CAP_PROP_FRAME_COUNT))
    width, height = int(cap.get(cv2.CAP_PROP_FRAME_WIDTH)),int(cap.get(cv2.CAP_PROP_FRAME_HEIGHT))
    fps = int(cap.get(cv2.CAP_PROP_FPS))
    video_frame=np.zeros((frame_count,height,width,3),dtype='float')
    x=0
    while cap.isOpened():
        ret,frame=cap.read()
        if ret is True:
            video_frame[x]=frame
            x+=1
        else:
            break
    return video_frame,fps

def remap_vid(amp_video,origin_video,levels=3):
    final_video=np.zeros(origin_video.shape)
    for i in range(0,amp_video.shape[0]):
        img = amp_video[i]
        for x in range(levels):
            img=cv2.pyrUp(img)
        img=img+origin_video[i]
        final_video[i]=img
    return final_video

def gaus_pyra(source,level=3):
    s=source.copy()
    pyra=[s]
    for i in range(level):
        s=cv2.pyrDown(s)
        pyra.append(s)
    return pyra

def lap_pyra(source,levels=3):
    gaussianpyra = gaus_pyra(source, levels)
    pyra=[]
    for i in range(levels,0,-1):
        GE=cv2.pyrUp(gaussianpyra[i])
        L=cv2.subtract(gaussianpyra[i-1],GE)
        pyra.append(L)
    return pyra

def gauss_vid(video_frame,levels=3):
    for i in range(0,video_frame.shape[0]):
        frame=video_frame[i]
        pyr=gaus_pyra(frame,level=levels)
        gaussian_frame=pyr[-1]
        if i==0:
            vid_data=np.zeros((video_frame.shape[0],gaussian_frame.shape[0],gaussian_frame.shape[1],3))
        vid_data[i]=gaussian_frame
    return vid_data


def lap_vid(video_frame,levels=3):
    vid_fre_list=[]
    for i in range(0,video_frame.shape[0]):
        frame=video_frame[i]
        pyr=lap_pyra(frame,levels=levels)
        if i==0:
            for k in range(levels):
                vid_fre_list.append(np.zeros((video_frame.shape[0],pyr[k].shape[0],pyr[k].shape[1],3)))
        for n in range(levels):
            vid_fre_list[n][i] = pyr[n]
    return vid_fre_list

def cutoff_band(data, l_cut_value, h_cut_value, F, order=5):
    omega = 0.5 * F
    low = l_cut_value / omega
    high = h_cut_value / omega
    b, a = signal.butter(order, [low, high], btype='band')
    y = signal.lfilter(b, a, data, axis=0)
    return y

def remap_frame(filter_vid_fre_list,levels=3):
    final=np.zeros(filter_vid_fre_list[-1].shape)
    for i in range(filter_vid_fre_list[0].shape[0]):
        up = filter_vid_fre_list[0][i]
        for n in range(levels-1):
            up=cv2.pyrUp(up)+filter_vid_fre_list[n + 1][i]
        final[i]=up
    return final

def magnify_motion(videopath,low,high,levels=3,amplification=20):
    t,f=load_video(videopath)
    lap_video_list=lap_vid(t,levels=levels)
    filter_vid_fre_list=[]
    for i in range(levels):
        filter_vid_fre=cutoff_band(lap_video_list[i],low,high,f)
        filter_vid_fre*=amplification
        filter_vid_fre_list.append(filter_vid_fre)
    recon=remap_frame(filter_vid_fre_list)
    final=t+recon
    save_video(final)

def mask(video_path):

    if os.path.exists(video_path.split('.')[0]+'.log'):
        os.remove(video_path.split('.')[0]+'.log')
    logger = logging.getLogger(video_path.split('.')[0])
    logger.setLevel(logging.INFO)
    ch = logging.StreamHandler()
    fh = logging.FileHandler(video_path.split('.')[0]+'.log')
    logger.addHandler(ch)
    logger.addHandler(fh)

    w = list(range(3,41,2))
    capture = cv2.VideoCapture(video_path)
    length = int(capture.get(cv2.CAP_PROP_FRAME_COUNT))
    # Reading the first frame
    _, frame1 = capture.read()
    # Convert to gray scale
    prvs = cv2.cvtColor(frame1, cv2.COLOR_BGR2GRAY)
    gmean = np.zeros_like(prvs)

    for i in range(length-1):
        # Capture another frame and convert to gray scale
        _, frame2 = capture.read()
        nex = cv2.cvtColor(frame2, cv2.COLOR_BGR2GRAY)

        diff1 = (nex - prvs)
        diff1[nex<=prvs] = 0
        diff2 = (-nex + prvs)
        diff2[prvs<=nex] = 0
        diff = diff1 + diff2


        gmean = gmean + diff/(length-1)

    c = gmean/(len(w) + 1)
    for wi in w:
        bb = cv2.GaussianBlur(gmean,(wi,wi),0)
        c = c + bb/(len(w)+1)
    m = c.max()*0.65
    c[c<m] = 0
    c[c>=m] = 255
    print("==========  processing mask ...  ==========")
    # cv2.imread("dd.jpg")
    row, col = np.where(c==255)
    row_center = int(sum(row)/len(row))
    col_center = int(sum(col)/len(col))
    row_r = sum(abs(row-row_center))/len(row)
    col_r = sum(abs(col-col_center))/len(col)
    avr_dis = np.sqrt(row_r**2 + col_r**2)
    estimate_val = avr_dis*2.5
    if int(row_center-estimate_val) > 0:
        c[0:int(row_center-estimate_val)] = np.zeros_like(c[0:int(row_center-estimate_val)])
    c[int(row_center+estimate_val):] = np.zeros_like(c[int(row_center+estimate_val):])

    if int(col_center-estimate_val) > 0:
        c[:,0:int(col_center-estimate_val)] = np.zeros_like(c[:,0:int(col_center-estimate_val)])
    c[:,int(col_center+estimate_val):] = np.zeros_like(c[:,int(col_center+estimate_val):])

    new_row, new_col = np.where(c==255)

    row_r = max(new_row) - row_center
    col_r = max(new_col) - col_center

    row_r = int(row_r * 1.5)
    col_r = int(col_r * 1.5)

    row_st = row_center - row_r
    col_st = col_center - col_r

    if row_st < 0:
        row_st = 0
    if col_st < 0:
        col_st = 0    

    # print(row_st, col_st, 2*row_r, 2*col_r)
    logger.info(f"{row_st, col_st, 2*row_r, 2*col_r}")
    return row_center, col_center, row_r, col_r

##############################################################
##############################################################
def mask_video_load(video_path):
    with open(video_path.split('.')[0]+'.log') as f:
        content = f.readlines()
        con = content[0].replace("(","").rstrip()
        con = con.replace(")","").split(',')
        # print(con)
        coor_mask = []
        for i in con:
            coor_mask.append(int(i))
    capture = cv2.VideoCapture(video_path)
    # Reading the first frame
    _, frame1 = capture.read()
    # Convert to gray scale
    prvs = cv2.cvtColor(frame1, cv2.COLOR_BGR2GRAY)
    row_end = coor_mask[0]+coor_mask[2]
    col_end = coor_mask[1]+coor_mask[3]
    if row_end > prvs.shape[0]:
        row_end = prvs.shape[0]
    if col_end > prvs.shape[1]:
        col_end = prvs.shape[1]
    return coor_mask[0],coor_mask[1],row_end,col_end
def PSD_calculation(video_path):
    x,y,x1,y1 = mask_video_load(video_path)    
    capture = cv2.VideoCapture(video_path)
    # F = int(capture.get(cv2.CAP_PROP_FPS))
    F = int(capture.get(cv2.CAP_PROP_FRAME_COUNT))
    fps = int(capture.get(cv2.CAP_PROP_FPS))  # frame rate   
    _, frame1 = capture.read()
    prvs = cv2.cvtColor(frame1, cv2.COLOR_BGR2GRAY)
    new_prvs = prvs[x:x1][:,y:y1]
    LL = new_prvs.flatten().shape[0]
    frame = np.zeros([F-100-1,LL])
    frame[0] = new_prvs.flatten()

    for i in range(F-100-2):
        # Capture another frame and convert to gray scale
        _, frame2 = capture.read()
        nex = cv2.cvtColor(frame2, cv2.COLOR_BGR2GRAY)
        new_nex = nex[x:x1][:,y:y1]
        frame[i+1] = new_nex.flatten()
    for i in range(LL):
        f, Pxx_den = signal.welch(frame[:,i], fps, nperseg=1024)
        if i == 0:
            ff = f.copy()/LL
            PP = Pxx_den.copy()/LL
        else:
            ff = ff + f/LL
            PP = PP + Pxx_den/LL
    plt.semilogy(ff, PP)
    plt.ylim([0.5e-3, 3])
    plt.xlabel('frequency [Hz]')
    plt.ylabel('PSD')
    plt.legend()
    plt.savefig("results/PSD_intensity.png")
    plt.close()
    return ff.min(), ff.max(), frame

def PSD_calculation_2(vir_frame, vis_frame, orig_frame, nam, F):
    LL = vir_frame[0].shape[0]
    for i in range(LL):
        f_r, Pxx_den_r = signal.welch(vir_frame[:,i], F, nperseg=1024)
        f_s, Pxx_den_s = signal.welch(vis_frame[:,i], F, nperseg=1024)
        f_o, Pxx_den_o = signal.welch(orig_frame[:,i], F, nperseg=1024)
        if i == 0:
            ff_r = f_r.copy()/LL
            PP_r = Pxx_den_r.copy()/LL
            ff_s = f_s.copy()/LL
            PP_s = Pxx_den_s.copy()/LL 
            ff_o = f_o.copy()/LL
            PP_o = Pxx_den_o.copy()/LL                       
        else:
            ff_r = ff_r + f_r/LL
            PP_r = PP_r + Pxx_den_r/LL
            ff_s = ff_s + f_s/LL
            PP_s = PP_s + Pxx_den_s/LL            
            ff_o = ff_o + f_o/LL
            PP_o = PP_o + Pxx_den_o/LL                 
    plt.semilogy(ff_r, PP_r,"-g", label="magnitude")
    plt.semilogy(ff_s, PP_s,"-b", label="angular")
    plt.semilogy(ff_o, PP_o,"-r", label="intensity")
    plt.ylim([0.5e-6, 3])
    plt.xlabel('frequency [Hz]')
    plt.ylabel('PSD')
    plt.legend()
    plt.savefig(f"{nam}") 
    plt.close()  

def optical_flow(video_path):
    x,y,x1,y1 = mask_video_load(video_path)    
    capture = cv2.VideoCapture(video_path)
    F = int(capture.get(cv2.CAP_PROP_FPS))
    F = int(capture.get(cv2.CAP_PROP_FRAME_COUNT))   
    _, frame1 = capture.read()
    prvs = cv2.cvtColor(frame1, cv2.COLOR_BGR2GRAY)
    new_prvs = prvs[x:x1][:,y:y1]

    Fkip = 100
    # Reading the first frame
    for i in range(F-1):
        _, framei = capture.read()    
        nex = cv2.cvtColor(framei, cv2.COLOR_BGR2GRAY)
        new_nex = nex[x:x1][:,y:y1]
        if i == 0:
            guess = 0
        else:
            guess = vi
        # vi = cv2.calcOpticalFlowFarneback(new_prvs, new_nex, guess, 0.5, 5, 20, 10, 5, 1.1, 0)
        vi = cv2.calcOpticalFlowFarneback(new_prvs, new_nex, None, 0.5, 3, 15, 3, 5, 1.2, 0)
        
        vix = vi[...,0]
        viy = vi[...,1]
        vir,vis = cv2.cartToPolar(vix, viy)
        if i<F-Fkip-1:
            if i==0:
                LL = vir.flatten().shape[0]
                vir_frame = np.zeros([F-Fkip-1,LL])
                vir_frame[0] = vir.flatten()
                d = (vir_frame[0])[vir_frame[0]>0]
                d = sum(d)/len(d)/(F-Fkip-1)
                Ls = vis.flatten().shape[0]
                vis_frame = np.zeros([F-Fkip-1,Ls])
                vis_frame[0] = new_prvs.flatten()                           
            else:
                vir_frame[i] = vir.flatten()
                dd = (vir_frame[i])[vir_frame[i]>0]
                d = d + sum(dd)/len(dd)/(F-Fkip-1)
                vis_frame[i] = vis.flatten()
        new_prvs = new_nex
        
    cutoff_value = d*1.2
    vir_frame[vir_frame>cutoff_value] = cutoff_value
    return vir_frame, vis_frame, F


def save_video(video_frame):
    fourcc = cv2.VideoWriter_fourcc('M','J','P','G')
    [height,width]=video_frame[0].shape[0:2]
    writer = cv2.VideoWriter("results/out.avi", fourcc, 30, (width, height), 1)
    for i in range(0,video_frame.shape[0]):
        writer.write(cv2.convertScaleAbs(video_frame[i]))
    writer.release()

if __name__=="__main__":
    video_path = "baby.avi"
    magnify_motion(video_path,6,8)
    #magnify_motion("baby.mp4",0.4,3)
    if os.path.exists(video_path.split('.')[0]+'.log'):
        vir_frame, vis_frame, F = optical_flow(video_path)
        min_fre, max_fre, frame = PSD_calculation(video_path)
        PSD_calculation_2(vir_frame, vis_frame, frame, 'results/PSD_intensity_ang_mag.png', F)
    else:
        mask(video_path)
        vir_frame, vis_frame, F = optical_flow(video_path)
        min_fre, max_fre, frame = PSD_calculation(video_path)
        PSD_calculation_2(vir_frame, vis_frame, frame, 'results/PSD_intensity_ang_mag.png', F)
