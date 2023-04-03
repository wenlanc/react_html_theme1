<template>
<div class="col-sm-12">
   <div class="card card-block card-stretch card-height">
      <div class="card-body">
         <div class="user-post-data">
            <div class="d-flex justify-content-between">
               <div class="me-3">
                  <img class="rounded-circle img-fluid" src="@/assets/images/user/01.jpg" alt="">
               </div>
               <div class="w-100">
                  <div class="d-flex justify-content-between">
                     <div class="">
                        <h5 class="mb-0 d-inline-block">Anna Sthesia</h5>
                        <span class="mb-0 d-inline-block">Add New Post</span>
                        <p class="mb-0 text-primary">Just Now</p>
                     </div>
                     <div class="card-post-toolbar">
                        <div class="dropdown">
                           <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                           <i class="ri-more-fill"></i>
                           </span>
                           <div class="dropdown-menu m-0 p-0">
                              <a class="dropdown-item p-3" href="#">
                                 <div class="d-flex align-items-top">
                                    <div class="h4">
                                       <i class="ri-save-line"></i>
                                    </div>
                                    <div class="data ms-2">
                                       <h6>Save Post</h6>
                                       <p class="mb-0">Add this to your saved items</p>
                                    </div>
                                 </div>
                              </a>
                              <a class="dropdown-item p-3" href="#">
                                 <div class="d-flex align-items-top">
                                    <i class="ri-close-circle-line h4"></i>
                                    <div class="data ms-2">
                                       <h6>Hide Post</h6>
                                       <p class="mb-0">See fewer posts like this.</p>
                                    </div>
                                 </div>
                              </a>
                              <a class="dropdown-item p-3" href="#">
                                 <div class="d-flex align-items-top">
                                    <i class="ri-user-unfollow-line h4"></i>
                                    <div class="data ms-2">
                                       <h6>Unfollow User</h6>
                                       <p class="mb-0">Stop seeing posts but stay friends.</p>
                                    </div>
                                 </div>
                              </a>
                              <a class="dropdown-item p-3" href="#">
                                 <div class="d-flex align-items-top">
                                    <i class="ri-notification-line h4"></i>
                                    <div class="data ms-2">
                                       <h6>Notifications</h6>
                                       <p class="mb-0">Turn on notifications for this post</p>
                                    </div>
                                 </div>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="mt-3">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla dolor, ornare at commodo non, feugiat non nisi. Phasellus faucibus mollis pharetra. Proin blandit ac massa sed rhoncus</p>
         </div>
         <div class="user-post">
            <div class=" d-grid grid-rows-2 grid-flow-col gap-3">
               <div class="row-span-2 row-span-md-1">
                  <img src="@/assets/images/page-img/p2.jpg" alt="post-image" class="img-fluid rounded w-100">
               </div>
               <div class="row-span-1">
                  <img src="@/assets/images/page-img/p1.jpg" alt="post-image" class="img-fluid rounded w-100">
               </div>
               <div class="row-span-1 ">
                  <img src="@/assets/images/page-img/p3.jpg" alt="post-image" class="img-fluid rounded w-100">
               </div>
            </div>
         </div>
         <div class="comment-area mt-3">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
               <div class="like-block position-relative d-flex align-items-center">
                  <div class="d-flex align-items-center">
                     <div class="like-data">
                        <div class="dropdown">
                           <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                           <img src="@/assets/images/icon/01.png" class="img-fluid" alt="">
                           </span>
                           <div class="dropdown-menu py-2">
                              <a class="ms-2 me-2" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Like"><img src="@/assets/images/icon/01.png" class="img-fluid" alt=""></a>
                              <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Love"><img src="@/assets/images/icon/02.png" class="img-fluid" alt=""></a>
                              <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Happy"><img src="@/assets/images/icon/03.png" class="img-fluid" alt=""></a>
                              <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="HaHa"><img src="@/assets/images/icon/04.png" class="img-fluid" alt=""></a>
                              <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Think"><img src="@/assets/images/icon/05.png" class="img-fluid" alt=""></a>
                              <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Sade" ><img src="@/assets/images/icon/06.png" class="img-fluid" alt=""></a>
                              <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Lovely"><img src="@/assets/images/icon/07.png" class="img-fluid" alt=""></a>
                           </div>
                        </div>
                     </div>
                     <div class="total-like-block ms-2 me-3">
                        <div class="dropdown">
                           <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                           140 Likes
                           </span>
                           <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">Max Emum</a>
                              <a class="dropdown-item" href="#">Bill Yerds</a>
                              <a class="dropdown-item" href="#">Hap E. Birthday</a>
                              <a class="dropdown-item" href="#">Tara Misu</a>
                              <a class="dropdown-item" href="#">Midge Itz</a>
                              <a class="dropdown-item" href="#">Sal Vidge</a>
                              <a class="dropdown-item" href="#">Other</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="total-comment-block">
                     <div class="dropdown">
                        <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                        20 Comment
                        </span>
                        <div class="dropdown-menu">
                           <a class="dropdown-item" href="#">Max Emum</a>
                           <a class="dropdown-item" href="#">Bill Yerds</a>
                           <a class="dropdown-item" href="#">Hap E. Birthday</a>
                           <a class="dropdown-item" href="#">Tara Misu</a>
                           <a class="dropdown-item" href="#">Midge Itz</a>
                           <a class="dropdown-item" href="#">Sal Vidge</a>
                           <a class="dropdown-item" href="#">Other</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="share-block d-flex align-items-center feather-icon mt-2 mt-md-0">
                  <a href="javascript:void();" data-bs-toggle="offcanvas" data-bs-target="#shareBottom" aria-controls="shareBottom"><i class="ri-share-line"></i>
                  <span class="ms-1">99 Share</span></a>
               </div>
               <offcanvas mainClass="bottom share-offcanvas" tabindex="-1" id="shareBottom" ariaLabelled="shareBottomLabel">
                  <offcanvas-header>
                     <h5 class="offcanvas-title" id="shareBottomLabel">Share</h5>
                     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </offcanvas-header>
                  <offcanvas-body bodyClass="small">
                     <div class="d-flex flex-wrap align-items-center">
                        <div class="text-center me-3 mb-3">
                           <img src="@/assets/images/icon/08.png" class="img-fluid rounded mb-2" alt="">
                           <h6>Facebook</h6>
                        </div>
                        <div class="text-center me-3 mb-3">
                           <img src="@/assets/images/icon/09.png" class="img-fluid rounded mb-2" alt="">
                           <h6>Twitter</h6>
                        </div>
                        <div class="text-center me-3 mb-3">
                           <img src="@/assets/images/icon/10.png" class="img-fluid rounded mb-2" alt="">
                           <h6>Instagram</h6>
                        </div>
                        <div class="text-center me-3 mb-3">
                           <img src="@/assets/images/icon/11.png" class="img-fluid rounded mb-2" alt="">
                           <h6>Google Plus</h6>
                        </div>
                        <div class="text-center me-3 mb-3">
                           <img src="@/assets/images/icon/13.png" class="img-fluid rounded mb-2" alt="">
                           <h6>In</h6>
                        </div>
                        <div class="text-center me-3 mb-3">
                           <img src="@/assets/images/icon/12.png" class="img-fluid rounded mb-2" alt="">
                           <h6>YouTube</h6>
                        </div>
                     </div>
                  </offcanvas-body>
               </offcanvas>
            </div>
            <hr>
            <ul class="post-comments list-inline p-0 m-0">
               <li class="mb-2">
                  <div class="d-flex">
                     <div class="user-img">
                        <img src="@/assets/images/user/02.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                     </div>
                     <div class="comment-data-block ms-3">
                        <h6>Monty Carlo</h6>
                        <p class="mb-0">Lorem ipsum dolor sit amet</p>
                        <div class="d-flex flex-wrap align-items-center comment-activity">
                           <a href="javascript:void();">like</a>
                           <a href="javascript:void();">reply</a>
                           <a href="javascript:void();">translate</a>
                           <span> 5 min </span>
                        </div>
                     </div>
                  </div>
               </li>
               <li>
                  <div class="d-flex">
                     <div class="user-img">
                        <img src="@/assets/images/user/03.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                     </div>
                     <div class="comment-data-block ms-3">
                        <h6>Paul Molive</h6>
                        <p class="mb-0">Lorem ipsum dolor sit amet</p>
                        <div class="d-flex flex-wrap align-items-center comment-activity">
                           <a href="javascript:void();">like</a>
                           <a href="javascript:void();">reply</a>
                           <a href="javascript:void();">translate</a>
                           <span> 5 min </span>
                        </div>
                     </div>
                  </div>
               </li>
            </ul>
            <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
               <input type="text" class="form-control rounded" placeholder="Enter Your Comment">
               <div class="comment-attagement d-flex">
                  <a href="javascript:void();"><i class="ri-link me-3"></i></a>
                  <a href="javascript:void();"><i class="ri-user-smile-line me-3"></i></a>
                  <a href="javascript:void();"><i class="ri-camera-line me-3"></i></a>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
   <div class="col-sm-12">
      <div class="card card-block card-stretch card-height">
         <div class="card-body">
            <div class="user-post-data">
               <div class="d-flex justify-content-between">
                  <div class="me-3">
                     <img class="rounded-circle img-fluid" src="@/assets/images/user/03.jpg" alt="">
                  </div>
                  <div class="w-100">
                     <div class="d-flex  justify-content-between">
                        <div class="">
                           <h5 class="mb-0 d-inline-block">Barb Ackue</h5>
                           <span class="mb-0 d-inline-block">Added New Image in a Post</span>
                           <p class="mb-0 text-primary">1 hour ago</p>
                        </div>
                        <div class="card-post-toolbar">
                           <div class="dropdown">
                              <span class="dropdown-toggle" id="postdata-5" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                              <i class="ri-more-fill"></i>
                              </span>
                              <div class="dropdown-menu m-0 p-0" aria-labelledby="postdata-5">
                                 <a class="dropdown-item p-3" href="#">
                                    <div class="d-flex align-items-top">
                                       <i class="ri-save-line h4"></i>
                                       <div class="data ms-2">
                                          <h6>Save Post</h6>
                                          <p class="mb-0">Add this to your saved items</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a class="dropdown-item p-3" href="#">
                                    <div class="d-flex align-items-top">
                                       <i class="ri-close-circle-line h4"></i>
                                       <div class="data ms-2">
                                          <h6>Hide Post</h6>
                                          <p class="mb-0">See fewer posts like this.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a class="dropdown-item p-3" href="#">
                                    <div class="d-flex align-items-top">
                                       <i class="ri-user-unfollow-line h4"></i>
                                       <div class="data ms-2">
                                          <h6>Unfollow User</h6>
                                          <p class="mb-0">Stop seeing posts but stay friends.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a class="dropdown-item p-3" href="#">
                                    <div class="d-flex align-items-top">
                                       <i class="ri-notification-line h4"></i>
                                       <div class="data ms-2">
                                          <h6>Notifications</h6>
                                          <p class="mb-0">Turn on notifications for this post</p>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="mt-3">
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla dolor, ornare at commodo non, feugiat non nisi. Phasellus faucibus mollis pharetra. Proin blandit ac massa sed rhoncus</p>
            </div>
            <div class="user-post">
               <a href="javascript:void();"><img src="@/assets/images/page-img/p4.jpg" alt="post-image" class="img-fluid rounded w-100"></a>
            </div>
            <div class="comment-area mt-3">
               <div class="d-flex justify-content-between align-items-center flex-wrap">
                  <div class="like-block position-relative d-flex align-items-center">
                     <div class="d-flex align-items-center">
                        <div class="like-data">
                           <div class="dropdown">
                              <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                              <img src="@/assets/images/icon/01.png" class="img-fluid" alt="">
                              </span>
                              <div class="dropdown-menu py-2">
                                 <a class="ms-2 me-2" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Like"><img src="@/assets/images/icon/01.png" class="img-fluid" alt=""></a>
                                 <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Love"><img src="@/assets/images/icon/02.png" class="img-fluid" alt=""></a>
                                 <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Happy"><img src="@/assets/images/icon/03.png" class="img-fluid" alt=""></a>
                                 <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="HaHa"><img src="@/assets/images/icon/04.png" class="img-fluid" alt=""></a>
                                 <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Think"><img src="@/assets/images/icon/05.png" class="img-fluid" alt=""></a>
                                 <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Sade" ><img src="@/assets/images/icon/06.png" class="img-fluid" alt=""></a>
                                 <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Lovely"><img src="@/assets/images/icon/07.png" class="img-fluid" alt=""></a>
                              </div>
                           </div>
                        </div>
                        <div class="total-like-block ms-2 me-3">
                           <div class="dropdown">
                              <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                              140 Likes
                              </span>
                              <div class="dropdown-menu">
                                 <a class="dropdown-item" href="#">Max Emum</a>
                                 <a class="dropdown-item" href="#">Bill Yerds</a>
                                 <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                 <a class="dropdown-item" href="#">Tara Misu</a>
                                 <a class="dropdown-item" href="#">Midge Itz</a>
                                 <a class="dropdown-item" href="#">Sal Vidge</a>
                                 <a class="dropdown-item" href="#">Other</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="total-comment-block">
                        <div class="dropdown">
                           <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                           20 Comment
                           </span>
                           <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">Max Emum</a>
                              <a class="dropdown-item" href="#">Bill Yerds</a>
                              <a class="dropdown-item" href="#">Hap E. Birthday</a>
                              <a class="dropdown-item" href="#">Tara Misu</a>
                              <a class="dropdown-item" href="#">Midge Itz</a>
                              <a class="dropdown-item" href="#">Sal Vidge</a>
                              <a class="dropdown-item" href="#">Other</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="share-block d-flex align-items-center feather-icon mt-2 mt-md-0">
                     <a href="javascript:void();" data-bs-toggle="offcanvas" data-bs-target="#shareBottom1" aria-controls="shareBottom1"><i class="ri-share-line"></i>
                     <span class="ms-1">99 Share</span></a>
                  </div>
                  <offcanvas mainClass="bottom share-offcanvas" tabindex="-1" id="shareBottom1" ariaLabelled="shareBottom1Label">
                     <offcanvas-header>
                        <h5 class="offcanvas-title" id="shareBottom1Label">Share</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                     </offcanvas-header>
                     <offcanvas-body bodyClass="small">
                        <div class="d-flex flex-wrap align-items-center">
                           <div class="text-center me-3 mb-3">
                              <img src="@/assets/images/icon/08.png" class="img-fluid mb-2" alt="">
                              <h6>Facebook</h6>
                           </div>
                           <div class="text-center me-3 mb-3">
                              <img src="@/assets/images/icon/09.png" class="img-fluid mb-2" alt="">
                              <h6>Twitter</h6>
                           </div>
                           <div class="text-center me-3 mb-3">
                              <img src="@/assets/images/icon/10.png" class="img-fluid mb-2" alt="">
                              <h6>Instagram</h6>
                           </div>
                           <div class="text-center me-3 mb-3">
                              <img src="@/assets/images/icon/11.png" class="img-fluid mb-2" alt="">
                              <h6>Google Plus</h6>
                           </div>
                           <div class="text-center me-3 mb-3">
                              <img src="@/assets/images/icon/13.png" class="img-fluid mb-2" alt="">
                              <h6>In</h6>
                           </div>
                           <div class="text-center me-3 mb-3">
                              <img src="@/assets/images/icon/12.png" class="img-fluid mb-2" alt="">
                              <h6>YouTube</h6>
                           </div>
                        </div>
                     </offcanvas-body>
                  </offcanvas>
               </div>
               <hr>
               <ul class="post-comments list-inline p-0 m-0">
                  <li class="mb-2">
                     <div class="d-flex ">
                        <div class="user-img">
                           <img src="@/assets/images/user/02.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                        </div>
                        <div class="comment-data-block ms-3">
                           <h6>Monty Carlo</h6>
                           <p class="mb-0">Lorem ipsum dolor sit amet</p>
                           <div class="d-flex flex-wrap align-items-center comment-activity">
                              <a href="javascript:void();">like</a>
                              <a href="javascript:void();">reply</a>
                              <a href="javascript:void();">translate</a>
                              <span> 5 min </span>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="d-flex ">
                        <div class="user-img">
                           <img src="@/assets/images/user/03.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                        </div>
                        <div class="comment-data-block ms-3">
                           <h6>Paul Molive</h6>
                           <p class="mb-0">Lorem ipsum dolor sit amet</p>
                           <div class="d-flex flex-wrap align-items-center comment-activity">
                              <a href="javascript:void();">like</a>
                              <a href="javascript:void();">reply</a>
                              <a href="javascript:void();">translate</a>
                              <span> 5 min </span>
                           </div>
                        </div>
                     </div>
                  </li>
               </ul>
               <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
                  <input type="text" class="form-control rounded" placeholder="Enter Your Comment">
                  <div class="comment-attagement d-flex">
                     <a href="javascript:void();"><i class="ri-link me-3"></i></a>
                     <a href="javascript:void();"><i class="ri-user-smile-line me-3"></i></a>
                     <a href="javascript:void();"><i class="ri-camera-line me-3"></i></a>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   <div class="col-sm-12">
      <div class="card card-block card-stretch card-height">
         <div class="card-body">
            <div class="user-post-data">
               <div class="d-flex justify-content-between">
                  <div class="me-3">
                     <img class="rounded-circle img-fluid" src="@/assets/images/user/04.jpg" alt="">
                  </div>
                  <div class="w-100">
                     <div class=" d-flex  justify-content-between">
                        <div class="">
                           <h5 class="mb-0 d-inline-block">Ira Membrit</h5>
                           <p class="mb-0 d-inline-block">Update her Status</p>
                           <p class="mb-0 text-primary">6 hour ago</p>
                        </div>
                        <div class="card-post-toolbar">
                           <div class="dropdown">
                              <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                              <i class="ri-more-fill"></i>
                              </span>
                              <div class="dropdown-menu m-0 p-0">
                                 <a class="dropdown-item p-3" href="#">
                                    <div class="d-flex align-items-top">
                                       <i class="ri-save-line h4"></i>
                                       <div class="data ms-2">
                                          <h6>Save Post</h6>
                                          <p class="mb-0">Add this to your saved items</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a class="dropdown-item p-3" href="#">
                                    <div class="d-flex align-items-top">
                                       <i class="ri-close-circle-line h4"></i>
                                       <div class="data ms-2">
                                          <h6>Hide Post</h6>
                                          <p class="mb-0">See fewer posts like this.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a class="dropdown-item p-3" href="#">
                                    <div class="d-flex align-items-top">
                                       <i class="ri-user-unfollow-line h4"></i>
                                       <div class="data ms-2">
                                          <h6>Unfollow User</h6>
                                          <p class="mb-0">Stop seeing posts but stay friends.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a class="dropdown-item p-3" href="#">
                                    <div class="d-flex align-items-top">
                                       <i class="ri-notification-line h4"></i>
                                       <div class="data ms-2">
                                          <h6>Notifications</h6>
                                          <p class="mb-0">Turn on notifications for this post</p>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="mt-3">
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla dolor, ornare at commodo non, feugiat non nisi. Phasellus faucibus mollis pharetra. Proin blandit ac massa sed rhoncus</p>
            </div>
            <div class="comment-area mt-3">
               <div class="d-flex justify-content-between align-items-center flex-wrap">
                  <div class="like-block position-relative d-flex align-items-center">
                     <div class="d-flex align-items-center">
                        <div class="like-data">
                           <div class="dropdown">
                              <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                              <img src="@/assets/images/icon/01.png" class="img-fluid" alt="">
                              </span>
                              <div class="dropdown-menu py-2">
                                 <a class="ms-2 me-2" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Like"><img src="@/assets/images/icon/01.png" class="img-fluid" alt=""></a>
                                 <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Love"><img src="@/assets/images/icon/02.png" class="img-fluid" alt=""></a>
                                 <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Happy"><img src="@/assets/images/icon/03.png" class="img-fluid" alt=""></a>
                                 <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="HaHa"><img src="@/assets/images/icon/04.png" class="img-fluid" alt=""></a>
                                 <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Think"><img src="@/assets/images/icon/05.png" class="img-fluid" alt=""></a>
                                 <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Sade" ><img src="@/assets/images/icon/06.png" class="img-fluid" alt=""></a>
                                 <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Lovely"><img src="@/assets/images/icon/07.png" class="img-fluid" alt=""></a>
                              </div>
                           </div>
                        </div>
                        <div class="total-like-block ms-2 me-3">
                           <div class="dropdown">
                              <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                              140 Likes
                              </span>
                              <div class="dropdown-menu">
                                 <a class="dropdown-item" href="#">Max Emum</a>
                                 <a class="dropdown-item" href="#">Bill Yerds</a>
                                 <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                 <a class="dropdown-item" href="#">Tara Misu</a>
                                 <a class="dropdown-item" href="#">Midge Itz</a>
                                 <a class="dropdown-item" href="#">Sal Vidge</a>
                                 <a class="dropdown-item" href="#">Other</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="total-comment-block">
                        <div class="dropdown">
                           <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                           20 Comment
                           </span>
                           <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">Max Emum</a>
                              <a class="dropdown-item" href="#">Bill Yerds</a>
                              <a class="dropdown-item" href="#">Hap E. Birthday</a>
                              <a class="dropdown-item" href="#">Tara Misu</a>
                              <a class="dropdown-item" href="#">Midge Itz</a>
                              <a class="dropdown-item" href="#">Sal Vidge</a>
                              <a class="dropdown-item" href="#">Other</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="share-block d-flex align-items-center feather-icon mt-2 mt-md-0">
                     <a href="javascript:void();" data-bs-toggle="offcanvas" data-bs-target="#shareBottom2" aria-controls="shareBottom2"><i class="ri-share-line"></i>
                     <span class="ms-1">99 Share</span></a>
                  </div>
                  <offcanvas mainClass="bottom share-offcanvas" tabindex="-1" id="shareBottom2" ariaLabelled="shareBottom2Label">
                     <offcanvas-header>
                        <h5 class="offcanvas-title" id="shareBottom2Label">Share</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                     </offcanvas-header>
                     <offcanvas-body bodyClass="small">
                        <div class="d-flex flex-wrap align-items-center">
                           <div class="text-center me-3 mb-3">
                              <img src="@/assets/images/icon/08.png" class="img-fluid mb-2" alt="">
                              <h6>Facebook</h6>
                           </div>
                           <div class="text-center me-3 mb-3">
                              <img src="@/assets/images/icon/09.png" class="img-fluid mb-2" alt="">
                              <h6>Twitter</h6>
                           </div>
                           <div class="text-center me-3 mb-3">
                              <img src="@/assets/images/icon/10.png" class="img-fluid mb-2" alt="">
                              <h6>Instagram</h6>
                           </div>
                           <div class="text-center me-3 mb-3">
                              <img src="@/assets/images/icon/11.png" class="img-fluid mb-2" alt="">
                              <h6>Google Plus</h6>
                           </div>
                           <div class="text-center me-3 mb-3">
                              <img src="@/assets/images/icon/13.png" class="img-fluid mb-2" alt="">
                              <h6>In</h6>
                           </div>
                           <div class="text-center me-3 mb-3">
                              <img src="@/assets/images/icon/12.png" class="img-fluid mb-2" alt="">
                              <h6>YouTube</h6>
                           </div>
                        </div>
                     </offcanvas-body>
                  </offcanvas>
               </div>
               <hr>
               <ul class="post-comments list-inline p-0 m-0">
                  <li class="mb-2">
                     <div class="d-flex">
                        <div class="user-img">
                           <img src="@/assets/images/user/02.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                        </div>
                        <div class="comment-data-block ms-3">
                           <h6>Monty Carlo</h6>
                           <p class="mb-0">Lorem ipsum dolor sit amet</p>
                           <div class="d-flex flex-wrap align-items-center comment-activity">
                              <a href="javascript:void();">like</a>
                              <a href="javascript:void();">reply</a>
                              <a href="javascript:void();">translate</a>
                              <span> 5 min </span>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="d-flex ">
                        <div class="user-img">
                           <img src="@/assets/images/user/03.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                        </div>
                        <div class="comment-data-block ms-3">
                           <h6>Paul Molive</h6>
                           <p class="mb-0">Lorem ipsum dolor sit amet</p>
                           <div class="d-flex flex-wrap align-items-center comment-activity">
                              <a href="javascript:void();">like</a>
                              <a href="javascript:void();">reply</a>
                              <a href="javascript:void();">translate</a>
                              <span> 5 min </span>
                           </div>
                        </div>
                     </div>
                  </li>
               </ul>
               <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
                  <input type="text" class="form-control rounded" placeholder="Enter Your Comment">
                  <div class="comment-attagement d-flex">
                     <a href="javascript:void();"><i class="ri-link me-3"></i></a>
                     <a href="javascript:void();"><i class="ri-user-smile-line me-3"></i></a>
                     <a href="javascript:void();"><i class="ri-camera-line me-3"></i></a>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   <div class="col-sm-12">
      <div class="card card-block card-stretch card-height">
         <div class="card-body">
            <div class="post-item">
               <div class="d-flex justify-content-between">
                  <div class="me-3">
                     <img class="rounded-circle img-fluid avatar-60" src="@/assets/images/user/1.jpg" alt="">
                  </div>
                  <div class="w-100">
                     <div class="d-flex justify-content-between">
                        <div class="">
                           <h5 class="mb-0 d-inline-block">Bni Cyst</h5>
                           <p class="ms-1 mb-0 d-inline-block">Changed Profile Picture</p>
                           <p class="mb-0">3 day ago</p>
                        </div>
                        <div class="card-post-toolbar">
                           <div class="dropdown">
                              <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                              <i class="ri-more-fill"></i>
                              </span>
                              <div class="dropdown-menu m-0 p-0">
                                 <a class="dropdown-item p-3" href="#">
                                    <div class="d-flex align-items-top">
                                       <i class="ri-save-line h4"></i>
                                       <div class="data ms-2">
                                          <h6>Save Post</h6>
                                          <p class="mb-0">Add this to your saved items</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a class="dropdown-item p-3" href="#">
                                    <div class="d-flex align-items-top">
                                       <i class="ri-close-circle-line h4"></i>
                                       <div class="data ms-2">
                                          <h6>Hide Post</h6>
                                          <p class="mb-0">See fewer posts like this.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a class="dropdown-item p-3" href="#">
                                    <div class="d-flex align-items-top">
                                       <i class="ri-user-unfollow-line h4"></i>
                                       <div class="data ms-2">
                                          <h6>Unfollow User</h6>
                                          <p class="mb-0">Stop seeing posts but stay friends.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a class="dropdown-item p-3" href="#">
                                    <div class="d-flex align-items-top">
                                       <i class="ri-notification-line h4"></i>
                                       <div class="data ms-2">
                                          <h6>Notifications</h6>
                                          <p class="mb-0">Turn on notifications for this post</p>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="user-post text-center">
               <a href="javascript:void();"><img src="@/assets/images/page-img/p5.jpg" alt="post-image" class="img-fluid rounded w-100 mt-3"></a>
            </div>
            <div class="comment-area mt-3">
               <div class="d-flex justify-content-between align-items-center flex-wrap">
                  <div class="like-block position-relative d-flex align-items-center">
                     <div class="d-flex align-items-center">
                        <div class="like-data">
                           <div class="dropdown">
                              <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                              <img src="@/assets/images/icon/01.png" class="img-fluid" alt="">
                              </span>
                              <div class="dropdown-menu py-2">
                                 <a class="ms-2 me-2" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Like"><img src="@/assets/images/icon/01.png" class="img-fluid" alt=""></a>
                                 <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Love"><img src="@/assets/images/icon/02.png" class="img-fluid" alt=""></a>
                                 <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Happy"><img src="@/assets/images/icon/03.png" class="img-fluid" alt=""></a>
                                 <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="HaHa"><img src="@/assets/images/icon/04.png" class="img-fluid" alt=""></a>
                                 <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Think"><img src="@/assets/images/icon/05.png" class="img-fluid" alt=""></a>
                                 <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Sade" ><img src="@/assets/images/icon/06.png" class="img-fluid" alt=""></a>
                                 <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Lovely"><img src="@/assets/images/icon/07.png" class="img-fluid" alt=""></a>
                              </div>
                           </div>
                        </div>
                        <div class="total-like-block ms-2 me-3">
                           <div class="dropdown">
                              <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                              140 Likes
                              </span>
                              <div class="dropdown-menu">
                                 <a class="dropdown-item" href="#">Max Emum</a>
                                 <a class="dropdown-item" href="#">Bill Yerds</a>
                                 <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                 <a class="dropdown-item" href="#">Tara Misu</a>
                                 <a class="dropdown-item" href="#">Midge Itz</a>
                                 <a class="dropdown-item" href="#">Sal Vidge</a>
                                 <a class="dropdown-item" href="#">Other</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="total-comment-block">
                        <div class="dropdown">
                           <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                           20 Comment
                           </span>
                           <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">Max Emum</a>
                              <a class="dropdown-item" href="#">Bill Yerds</a>
                              <a class="dropdown-item" href="#">Hap E. Birthday</a>
                              <a class="dropdown-item" href="#">Tara Misu</a>
                              <a class="dropdown-item" href="#">Midge Itz</a>
                              <a class="dropdown-item" href="#">Sal Vidge</a>
                              <a class="dropdown-item" href="#">Other</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="share-block d-flex align-items-center feather-icon mt-2 mt-md-0">
                     <a href="javascript:void();" data-bs-toggle="offcanvas" data-bs-target="#shareBottom3" aria-controls="shareBottom3"><i class="ri-share-line"></i>
                     <span class="ms-1">99 Share</span></a>
                  </div>
                  <offcanvas mainClass="bottom share-offcanvas" tabindex="-1" id="shareBottom3" ariaLabelled="shareBottom3Label">
                     <offcanvas-header>
                        <h5 class="offcanvas-title" id="shareBottom3Label">Share</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                     </offcanvas-header>
                     <offcanvas-body bodyClass="small">
                        <div class="d-flex flex-wrap align-items-center">
                           <div class="text-center me-3 mb-3">
                              <img src="@/assets/images/icon/08.png" class="img-fluid mb-2" alt="">
                              <h6>Facebook</h6>
                           </div>
                           <div class="text-center me-3 mb-3">
                              <img src="@/assets/images/icon/09.png" class="img-fluid mb-2" alt="">
                              <h6>Twitter</h6>
                           </div>
                           <div class="text-center me-3 mb-3">
                              <img src="@/assets/images/icon/10.png" class="img-fluid mb-2" alt="">
                              <h6>Instagram</h6>
                           </div>
                           <div class="text-center me-3 mb-3">
                              <img src="@/assets/images/icon/11.png" class="img-fluid mb-2" alt="">
                              <h6>Google Plus</h6>
                           </div>
                           <div class="text-center me-3 mb-3">
                              <img src="@/assets/images/icon/13.png" class="img-fluid mb-2" alt="">
                              <h6>In</h6>
                           </div>
                           <div class="text-center me-3 mb-3">
                              <img src="@/assets/images/icon/12.png" class="img-fluid mb-2" alt="">
                              <h6>YouTube</h6>
                           </div>
                        </div>
                     </offcanvas-body>
                  </offcanvas>
               </div>
               <hr>
               <ul class="post-comments list-inline p-0 m-0">
                  <li class="mb-2">
                     <div class="d-flex">
                        <div class="user-img">
                           <img src="@/assets/images/user/02.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                        </div>
                        <div class="comment-data-block ms-3">
                           <h6>Monty Carlo</h6>
                           <p class="mb-0">Lorem ipsum dolor sit amet</p>
                           <div class="d-flex flex-wrap align-items-center comment-activity">
                              <a href="javascript:void();">like</a>
                              <a href="javascript:void();">reply</a>
                              <a href="javascript:void();">translate</a>
                              <span> 5 min </span>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="d-flex">
                        <div class="user-img">
                           <img src="@/assets/images/user/03.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                        </div>
                        <div class="comment-data-block ms-3">
                           <h6>Paul Molive</h6>
                           <p class="mb-0">Lorem ipsum dolor sit amet</p>
                           <div class="d-flex flex-wrap align-items-center comment-activity">
                              <a href="javascript:void();">like</a>
                              <a href="javascript:void();">reply</a>
                              <a href="javascript:void();">translate</a>
                              <span> 5 min </span>
                           </div>
                        </div>
                     </div>
                  </li>
               </ul>
               <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
                  <input type="text" class="form-control rounded" placeholder="Enter Your Comment">
                  <div class="comment-attagement d-flex">
                     <a href="javascript:void();"><i class="ri-link me-3"></i></a>
                     <a href="javascript:void();"><i class="ri-user-smile-line me-3"></i></a>
                     <a href="javascript:void();"><i class="ri-camera-line me-3"></i></a>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   <div class="col-sm-12">
      <div class="card card-block card-stretch card-height">
         <div class="card-body">
            <div class="user-post-data">
               <div class="d-flex justify-content-between">
                  <div class="me-3">
                     <img class="rounded-circle img-fluid" src="@/assets/images/user/02.jpg" alt="">
                  </div>
                  <div class="w-100">
                     <div class="d-flex justify-content-between">
                        <div class="">
                           <h5 class="mb-0 d-inline-block">Paige Turner</h5>
                           <p class="mb-0 d-inline-block">Added New Video in his Timeline</p>
                           <p class="mb-0 text-primary">1 day ago</p>
                        </div>
                        <div class="card-post-toolbar">
                           <div class="dropdown">
                              <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                              <i class="ri-more-fill"></i>
                              </span>
                              <div class="dropdown-menu m-0 p-0">
                                 <a class="dropdown-item p-3" href="#">
                                    <div class="d-flex align-items-top">
                                       <i class="ri-save-line h4"></i>
                                       <div class="data ms-2">
                                          <h6>Save Post</h6>
                                          <p class="mb-0">Add this to your saved items</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a class="dropdown-item p-3" href="#">
                                    <div class="d-flex align-items-top">
                                       <i class="ri-close-circle-line h4"></i>
                                       <div class="data ms-2">
                                          <h6>Hide Post</h6>
                                          <p class="mb-0">See fewer posts like this.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a class="dropdown-item p-3" href="#">
                                    <div class="d-flex align-items-top">
                                       <i class="ri-user-unfollow-line h4"></i>
                                       <div class="data ms-2">
                                          <h6>Unfollow User</h6>
                                          <p class="mb-0">Stop seeing posts but stay friends.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a class="dropdown-item p-3" href="#">
                                    <div class="d-flex align-items-top">
                                       <i class="ri-notification-line h4"></i>
                                       <div class="data ms-2">
                                          <h6>Notifications</h6>
                                          <p class="mb-0">Turn on notifications for this post</p>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="mt-3">
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla dolor, ornare at commodo non, feugiat non nisi. Phasellus faucibus mollis pharetra. Proin blandit ac massa sed rhoncus</p>
            </div>
            <div class="user-post">
               <div class="ratio ratio-16x9">
                  <iframe  src="https://www.youtube.com/embed/j_GsIanLxZk?rel=0" allowfullscreen></iframe>
               </div>
            </div>
            <div class="comment-area mt-3">
               <div class="d-flex justify-content-between align-items-center flex-wrap">
                  <div class="like-block position-relative d-flex align-items-center">
                     <div class="d-flex align-items-center">
                        <div class="like-data">
                           <div class="dropdown">
                              <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                              <img src="@/assets/images/icon/01.png" class="img-fluid" alt="">
                              </span>
                              <div class="dropdown-menu py-2">
                                 <a class="ms-2 me-2" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Like"><img src="@/assets/images/icon/01.png" class="img-fluid" alt=""></a>
                                 <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Love"><img src="@/assets/images/icon/02.png" class="img-fluid" alt=""></a>
                                 <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Happy"><img src="@/assets/images/icon/03.png" class="img-fluid" alt=""></a>
                                 <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="HaHa"><img src="@/assets/images/icon/04.png" class="img-fluid" alt=""></a>
                                 <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Think"><img src="@/assets/images/icon/05.png" class="img-fluid" alt=""></a>
                                 <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Sade" ><img src="@/assets/images/icon/06.png" class="img-fluid" alt=""></a>
                                 <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Lovely"><img src="@/assets/images/icon/07.png" class="img-fluid" alt=""></a>
                              </div>
                           </div>
                        </div>
                        <div class="total-like-block ms-2 me-3">
                           <div class="dropdown">
                              <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                              140 Likes
                              </span>
                              <div class="dropdown-menu">
                                 <a class="dropdown-item" href="#">Max Emum</a>
                                 <a class="dropdown-item" href="#">Bill Yerds</a>
                                 <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                 <a class="dropdown-item" href="#">Tara Misu</a>
                                 <a class="dropdown-item" href="#">Midge Itz</a>
                                 <a class="dropdown-item" href="#">Sal Vidge</a>
                                 <a class="dropdown-item" href="#">Other</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="total-comment-block">
                        <div class="dropdown">
                           <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                           20 Comment
                           </span>
                           <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">Max Emum</a>
                              <a class="dropdown-item" href="#">Bill Yerds</a>
                              <a class="dropdown-item" href="#">Hap E. Birthday</a>
                              <a class="dropdown-item" href="#">Tara Misu</a>
                              <a class="dropdown-item" href="#">Midge Itz</a>
                              <a class="dropdown-item" href="#">Sal Vidge</a>
                              <a class="dropdown-item" href="#">Other</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="share-block d-flex align-items-center feather-icon mt-2 mt-md-0">
                     <a href="javascript:void();" data-bs-toggle="offcanvas" data-bs-target="#shareBottom4" aria-controls="shareBottom4"><i class="ri-share-line"></i>
                     <span class="ms-1">99 Share</span></a>
                  </div>
                  <offcanvas mainClass="bottom share-offcanvas" tabindex="-1" id="shareBottom4" ariaLabelled="shareBottom4Label">
                     <offcanvas-header>
                        <h5 class="offcanvas-title" id="shareBottom4Label">Share</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                     </offcanvas-header>
                     <offcanvas-body bodyClass="small">
                        <div class="d-flex flex-wrap align-items-center">
                           <div class="text-center me-3 mb-3">
                              <img src="@/assets/images/icon/08.png" class="img-fluid mb-2" alt="">
                              <h6>Facebook</h6>
                           </div>
                           <div class="text-center me-3 mb-3">
                              <img src="@/assets/images/icon/09.png" class="img-fluid mb-2" alt="">
                              <h6>Twitter</h6>
                           </div>
                           <div class="text-center me-3 mb-3">
                              <img src="@/assets/images/icon/10.png" class="img-fluid mb-2" alt="">
                              <h6>Instagram</h6>
                           </div>
                           <div class="text-center me-3 mb-3">
                              <img src="@/assets/images/icon/11.png" class="img-fluid mb-2" alt="">
                              <h6>Google Plus</h6>
                           </div>
                           <div class="text-center me-3 mb-3">
                              <img src="@/assets/images/icon/13.png" class="img-fluid mb-2" alt="">
                              <h6>In</h6>
                           </div>
                           <div class="text-center me-3 mb-3">
                              <img src="@/assets/images/icon/12.png" class="img-fluid mb-2" alt="">
                              <h6>YouTube</h6>
                           </div>
                        </div>
                     </offcanvas-body>
                  </offcanvas>
               </div>
               <hr>
               <ul class="post-comments list-inline p-0 m-0">
                  <li class="mb-2">
                     <div class="d-flex flex-wrap">
                        <div class="user-img">
                           <img src="@/assets/images/user/02.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                        </div>
                        <div class="comment-data-block ms-3">
                           <h6>Monty Carlo</h6>
                           <p class="mb-0">Lorem ipsum dolor sit amet</p>
                           <div class="d-flex flex-wrap align-items-center comment-activity">
                              <a href="javascript:void();">like</a>
                              <a href="javascript:void();">reply</a>
                              <a href="javascript:void();">translate</a>
                              <span> 5 min </span>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="d-flex flex-wrap">
                        <div class="user-img">
                           <img src="@/assets/images/user/03.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                        </div>
                        <div class="comment-data-block ms-3">
                           <h6>Paul Molive</h6>
                           <p class="mb-0">Lorem ipsum dolor sit amet</p>
                           <div class="d-flex flex-wrap align-items-center comment-activity">
                              <a href="javascript:void();">like</a>
                              <a href="javascript:void();">reply</a>
                              <a href="javascript:void();">translate</a>
                              <span> 5 min </span>
                           </div>
                        </div>
                     </div>
                  </li>
               </ul>
               <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
                  <input type="text" class="form-control rounded" placeholder="Enter Your Comment">
                  <div class="comment-attagement d-flex">
                     <a href="javascript:void();"><i class="ri-link me-3"></i></a>
                     <a href="javascript:void();"><i class="ri-user-smile-line me-3"></i></a>
                     <a href="javascript:void();"><i class="ri-camera-line me-3"></i></a>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</template>
<script>
export default {
  name: 'SocialPost',
  props: [
    'post'
  ],
  data () {
    return {
      commentMessage: ''
    }
  }
}
</script>

<style>
  .dropdown-item{
    color: #212529 !important;
  }
  .dropdown-menu .dropdown-item:focus, .dropdown-menu .dropdown-item:hover{
    background: transparent;
    color: var(--iq-primary) !important;
  }
</style>
