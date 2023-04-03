<x-app-layout>
  
<div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
            <div class="card-body profile-page p-0">
               <div class="profile-header">
                  <div class="position-relative">
                     <img src="{{asset('images/page-img/profile-bg1.jpg')}}" alt="profile-bg" class="rounded img-fluid">
                     <ul class="header-nav list-inline d-flex flex-wrap justify-end p-0 m-0">
                        <li><a href="#"><i class="ri-pencil-line"></i></a></li>
                     </ul>
                  </div>
                  <div class="user-detail text-center mb-3">
                     <div class="profile-img">
                        <img src="{{asset('images/user/11.png')}}" alt="profile-img" class="avatar-130 img-fluid">
                     </div>
                     <div class="profile-detail">
                        <h3 class="">Bni Cyst</h3>
                     </div>
                  </div>
                  <div class="profile-info p-3 d-flex align-items-center justify-content-between position-relative">
                     <div class="social-links">
                        <ul class="social-data-block d-flex align-items-center justify-content-between list-inline p-0 m-0">
                           <li class="text-center pe-3">
                              <a href="#"><img src="{{asset('images/icon/08.png')}}" class="img-fluid rounded" alt="facebook"></a>
                           </li>
                           <li class="text-center pe-3">
                              <a href="#"><img src="{{asset('images/icon/09.png')}}" class="img-fluid rounded" alt="Twitter"></a>
                           </li>
                           <li class="text-center pe-3">
                              <a href="#"><img src="{{asset('images/icon/10.png')}}" class="img-fluid rounded" alt="Instagram"></a>
                           </li>
                           <li class="text-center pe-3">
                              <a href="#"><img src="{{asset('images/icon/11.png')}}" class="img-fluid rounded" alt="Google plus"></a>
                           </li>
                           <li class="text-center pe-3">
                              <a href="#"><img src="{{asset('images/icon/12.png')}}" class="img-fluid rounded" alt="You tube"></a>
                           </li>
                           <li class="text-center md-pe-3 pe-0">
                              <a href="#"><img src="{{asset('images/icon/13.png')}}" class="img-fluid rounded" alt="linkedin"></a>
                           </li>
                        </ul>
                     </div>
                     <div class="social-info">
                        <ul class="social-data-block d-flex align-items-center justify-content-between list-inline p-0 m-0">
                           <li class="text-center ps-3">
                              <h6>Posts</h6>
                              <p class="mb-0">690</p>
                           </li>
                           <li class="text-center ps-3">
                              <h6>Followers</h6>
                              <p class="mb-0">206</p>
                           </li>
                           <li class="text-center ps-3">

                              <h6>Following</h6>
                              <p class="mb-0">100</p>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <ul class="nav tab-nav-pane nav-tabs  mb-0">
                <li class="pb-0 mb-0 nav-item"><a data-bs-toggle="tab" class="font-weight-bold text-uppercase ms-3 active" data-bs-target="#Posts" href="#Posts">Posts</a></li>
                <li class="pb-0 mb-0 nav-item"><a data-bs-toggle="tab" class="font-weight-bold text-uppercase ms-3" data-bs-target="#Abouts" href="#Abouts">About</a></li>
                <li class="pb-0 mb-0 nav-item"><a data-bs-toggle="tab" class="font-weight-bold text-uppercase ms-3" data-bs-target="#Friends" href="#Friends">Friends</a></li>
                <li class="pb-0 mb-0 nav-item"><a data-bs-toggle="tab" class="font-weight-bold text-uppercase ms-3" data-bs-target="#Photos" href="#Photos">Photos</a></li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-6">
            </div>
            </div>
            <div class="row mt-1">
                <div class="col-md-5 col-lg-5">                 
                    <div class="tab-pane fade show active" id="Posts" role="tabpanel">
                        <div class="card">
                            <div class="card-body">
                                <h5>Intro</h5>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg><span class="ms-2">Joined August 2012</span></span>
                                <div class="mt-2">
                                <div class="d-grid gap-2">
                                        <button class="btn btn-primary" type="button">Edit Details</button>
                                        <button class="btn btn-primary" type="button">Add Hobbies</button>
                                        <button class="btn btn-primary" type="button">Add Featured</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                           <div class="card-header d-flex justify-content-between">
                              <div class="header-title">
                                 <h4 class="card-title">Life Event</h4>
                              </div>
                              <div class="card-header-toolbar d-flex align-items-center">
                                 <p class="m-0"><a href="javacsript:void();"> Create </a></p>
                              </div>
                           </div>
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-sm-12">
                                    <div class="event-post position-relative">
                                       <a href="#"><img src="{{asset('images/page-img/07.jpg')}}" alt="gallary-image" class="img-fluid rounded"></a>
                                       <div class="job-icon-position">
                                          <div class="job-icon bg-primary p-2 d-inline-block rounded-circle"><i class="ri-briefcase-line text-white"></i></div>
                                       </div>
                                       <div class="card-body text-center p-2">
                                          <h5>Started New Job at Apple</h5>
                                          <p>January 24, 2019</p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-sm-12">
                                    <div class="event-post position-relative">
                                       <a href="#"><img src="{{asset('images/page-img/06.jpg')}}" alt="gallary-image" class="img-fluid rounded"></a>
                                       <div class="job-icon-position">
                                          <div class="job-icon bg-primary p-2 d-inline-block rounded-circle"><i class="ri-briefcase-line text-white"></i></div>
                                       </div>
                                       <div class="card-body text-center p-2">
                                          <h5>Freelance Photographer</h5>
                                          <p class="mb-0">January 24, 2019</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Photos" role="tabpanel">
                        <div class="card">
                           <div class="card-header d-flex justify-content-between">
                              <div class="header-title">
                                 <h4 class="card-title">Photos</h4>
                              </div>
                              <div class="card-header-toolbar d-flex align-items-center">
                                 <p class="m-0"><a href="javacsript:void();">Add Photo </a></p>
                              </div>
                           </div>
                           <div class="card-body">
                              <ul class="profile-img-gallary p-0 m-0 list-unstyled">
                                 <li class=""><a href="#"><img src="{{asset('images/page-img/g1.jpg')}}" alt="gallary-image" class="img-fluid"></a></li>
                                 <li class=""><a href="#"><img src="{{asset('images/page-img/g2.jpg')}}" alt="gallary-image" class="img-fluid"></a></li>
                                 <li class=""><a href="#"><img src="{{asset('images/page-img/g3.jpg')}}" alt="gallary-image" class="img-fluid"></a></li>
                                 <li class=""><a href="#"><img src="{{asset('images/page-img/g4.jpg')}}" alt="gallary-image" class="img-fluid"></a></li>
                                 <li class=""><a href="#"><img src="{{asset('images/page-img/g5.jpg')}}" alt="gallary-image" class="img-fluid"></a></li>
                                 <li class=""><a href="#"><img src="{{asset('images/page-img/g6.jpg')}}" alt="gallary-image" class="img-fluid"></a></li>
                                 <li class=""><a href="#"><img src="{{asset('images/page-img/g7.jpg')}}" alt="gallary-image" class="img-fluid"></a></li>
                                 <li class=""><a href="#"><img src="{{asset('images/page-img/g8.jpg')}}" alt="gallary-image" class="img-fluid"></a></li>
                                 <li class=""><a href="#"><img src="{{asset('images/page-img/g9.jpg')}}" alt="gallary-image" class="img-fluid"></a></li>
                              </ul>
                           </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Abouts" role="tabpanel">
                        <div class="card">
                            <div class="card-body">
                                <h4>Contact Information</h4>
                                <hr>
                                <div class="row">
                                    <div class="col-3">
                                       <h6>Email</h6>
                                    </div>
                                    <div class="col-9">
                                       <a href="#" class="mb-0">Bnijohn@gmail.com</a>
                                    </div>
                                    <div class="col-3">
                                       <h6>Mobile</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0">(001) 4544 565 456</p>
                                    </div>
                                    <div class="col-3">
                                       <h6>Address</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0">United States of America</p>
                                    </div>
                                 </div>
                                 <h4 class="mt-3">Websites and Social Links</h4>
                                 <hr>
                                 <div class="row">
                                    <div class="col-3">
                                       <h6>Website</h6>
                                    </div>
                                    <div class="col-9">
                                       <a href="#" class="mb-0">www.bootstrap.com</a>
                                    </div>
                                    <div class="col-3">
                                       <h6>Social Link</h6>
                                    </div>
                                    <div class="col-9">
                                       <a href="#" class="mb-0">www.bootstrap.com</a>
                                    </div>
                                 </div>
                                 <hr>
                                 <h4 class="mt-3">Basic Information</h4>
                                 <hr>
                                 <div class="row">
                                    <div class="col-3">
                                       <h6>Birth Date</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0">24 January</p>
                                    </div>
                                    <div class="col-3">
                                       <h6>Birth Year</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0">1994</p>
                                    </div>
                                    <div class="col-3">
                                       <h6>Gender</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0">Female</p>
                                    </div>
                                    <div class="col-3">
                                       <h6>interested in</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0">Designing</p>
                                    </div>
                                    <div class="col-3">
                                       <h6>language</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0">English, French</p>
                                    </div>
                                 </div>

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Friends" role="tabpanel">
                        <div class="card">
                            <div class="card-body">
                                <ul class="request-list list-inline m-0 p-0">
                                    <li class="d-flex align-items-center  flex-wrap">
                                        <div class="user-img img-fluid flex-shrink-0">
                                        <img src="{{asset('images/user/13.jpg')}}" alt="story-img" class="rounded-circle avatar-40">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6>Paul Misunday</h6>
                                            <p class="mb-0">6  friends</p>
                                        </div>
                                        <div class="d-flex align-items-center mt-2 mt-md-0">
                                            <a href="#" class="me-3 btn btn-primary rounded">Follow</a>
                                                                                
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center  flex-wrap">
                                        <div class="user-img img-fluid flex-shrink-0">
                                        <img src="{{asset('images/user/14.jpg')}}" alt="story-img" class="rounded-circle avatar-40">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6>Reanne Carnation</h6>
                                            <p class="mb-0">12  friends</p>
                                        </div>
                                        <div class="d-flex align-items-center mt-2 mt-md-0">
                                            <a href="#" class="me-3 btn btn-primary rounded">Follow</a>
                                                                                
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center  flex-wrap">
                                        <div class="user-img img-fluid flex-shrink-0">
                                        <img src="{{asset('images/user/15.jpg')}}" alt="story-img" class="rounded-circle avatar-40">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6>Reanne Carnation</h6>
                                            <p class="mb-0">12  friends</p>
                                        </div>
                                        <div class="d-flex align-items-center mt-2 mt-md-0">
                                            <a href="#" class="me-3 btn btn-primary rounded">Follow</a>
                                                                                
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center  flex-wrap">
                                        <div class="user-img img-fluid flex-shrink-0">
                                        <img src="{{asset('images/user/16.jpg')}}" alt="story-img" class="rounded-circle avatar-40">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6>Reanne Carnation</h6>
                                            <p class="mb-0">12  friends</p>
                                        </div>
                                        <div class="d-flex align-items-center mt-2 mt-md-0">
                                            <a href="#" class="me-3 btn btn-primary rounded">Follow</a>
                                                                                
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center  flex-wrap">
                                        <div class="user-img img-fluid flex-shrink-0">
                                        <img src="{{asset('images/user/17.jpg')}}" alt="story-img" class="rounded-circle avatar-40">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6>Reanne Carnation</h6>
                                            <p class="mb-0">15  friends</p>
                                        </div>
                                        <div class="d-flex align-items-center mt-2 mt-md-0">
                                            <a href="#" class="me-3 btn btn-primary rounded">Follow</a>
                                                                                
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center  flex-wrap">
                                        <div class="user-img img-fluid flex-shrink-0">
                                        <img src="{{asset('images/user/18.jpg')}}" alt="story-img" class="rounded-circle avatar-40">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6>Reanne Carnation</h6>
                                            <p class="mb-0">21  friends</p>
                                        </div>
                                        <div class="d-flex align-items-center mt-2 mt-md-0">
                                            <a href="#" class="me-3 btn btn-primary rounded">Follow</a>
                                                                                
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-lg-7">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="user-img">
                                    <img src="{{asset('images/user/1.jpg')}}" alt="userimg" class="avatar-40 rounded-circle">
                                </div>
                                <div class="input-group ms-2">
                                    <input type="text" class="form-control profilesearch" placeholder="What's on your mind?" aria-label="What's on your mind?" aria-describedby="btnGroupAddon">
                                </div>
                            </div>
                            <hr>
                            <ul class="post-opt-block d-flex list-inline m-0 p-0 flex-wrap justify-content-around">
                                <li class="bg-soft-primary rounded p-2 pointer d-flex align-items-center me-3 mb-md-0 mb-2"><img src="{{asset('images/small/07.png')}}" alt="icon" class="img-fluid me-2"> Photo/Video</li>
                                <li class="bg-soft-primary rounded p-2 pointer d-flex align-items-center me-3 mb-md-0 mb-2"><img src="{{asset('images/small/08.png')}}" alt="icon" class="img-fluid me-2"> Live Video </li>
                                <li class="bg-soft-primary rounded p-2 pointer d-flex align-items-center me-3"><img src="{{asset('images/small/09.png')}}" alt="icon" class="img-fluid me-2"> Life Events</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                <h5>Posts</h5>
                                <div>
                                    <button type="button" class="btn btn-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17px" height="17px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                        </svg>
                                        <span class="ms-2 mb-2">Filters</span>
                                    </button>
                                    <button type="button" class="btn btn-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17px" height="17px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        <span class="ms-2 mb-2">Manages Posts</span>
                                    </button>
                                </div>
                            </div>
                            <hr>
                            <ul class="nav tab-nav-pane nav-tabs  justify-content-evenly mb-0">
                                <li class="pb-0 mb-0 nav-item">
                                    <a data-bs-toggle="tab" class="font-weight-bold text-uppercase ms-3" href="#Listview"><svg xmlns="http://www.w3.org/2000/svg" width="17px" height="17px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                                    </svg>List View</a>
                                </li>
                                <li class="pb-0 mb-0 nav-item">
                                    <a data-bs-toggle="tab" class="font-weight-bold text-uppercase ms-3" href="#Gridview"><svg xmlns="http://www.w3.org/2000/svg" width="17px" height="17px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                    </svg>Grid View</a>
                                </li>
                            </ul>
                            <div class="tab-pane fade show active" id="Listview" role="tabpanel">
                                <div class="">
                                    <div class="card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="card-title">Friend Request</h4>
                                    </div>
                                    </div>
                                    <div class="card-body">
                                    <ul class="request-list list-inline m-0 p-0">
                                        <li class="d-flex align-items-center  justify-content-between flex-wrap">
                                            <div class="user-img img-fluid flex-shrink-0">
                                            <img src="{{asset('images/user/05.jpg')}}" alt="story-img" class="rounded-circle avatar-40">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                            <h6>Jaques Amole</h6>
                                                <p class="mb-0">40  friends</p>
                                            </div>
                                            <div class="d-flex align-items-center mt-2 mt-md-0">
                                                <div class="confirm-click-btn">
                                                <a href="#" class="me-3 btn btn-primary rounded confirm-btn">Confirm</a>
                                                <a href="../app/profile.html" class="me-3 btn btn-primary rounded request-btn" style="display: none;">View All</a>
                                                </div>
                                                <a href="#" class="btn btn-secondary rounded" data-extra-toggle="delete" data-closest-elem=".item">Delete Request</a>                                    
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center  justify-content-between flex-wrap">
                                            <div class="user-img img-fluid flex-shrink-0">
                                            <img src="{{asset('images/user/06.jpg')}}" alt="story-img" class="rounded-circle avatar-40">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6>Lucy Tania</h6>
                                                <p class="mb-0">12  friends</p>
                                            </div>
                                            <div class="d-flex align-items-center mt-2 mt-md-0">                                    
                                                <div class="confirm-click-btn">
                                                <a href="#" class="me-3 btn btn-primary rounded confirm-btn">Confirm</a>
                                                <a href="../app/profile.html" class="me-3 btn btn-primary rounded request-btn" style="display: none;">View All</a>
                                                </div>
                                                <a href="#" class="btn btn-secondary rounded" data-extra-toggle="delete" data-closest-elem=".item">Delete Request</a>                                    
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center flex-wrap">
                                            <div class="user-img img-fluid flex-shrink-0">
                                            <img src="{{asset('images/user/07.jpg')}}" alt="story-img" class="rounded-circle avatar-40">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6>Val Adictorian</h6>
                                                <p class="mb-0">0  friends</p>
                                            </div>
                                            <div class="d-flex align-items-center mt-2 mt-md-0">
                                                <div class="confirm-click-btn">
                                                <a href="#" class="me-3 btn btn-primary rounded confirm-btn">Confirm</a>
                                                <a href="../app/profile.html" class="me-3 btn btn-primary rounded request-btn" style="display: none;">View All</a>
                                                </div>
                                                <a href="#" class="btn btn-secondary rounded" data-extra-toggle="delete" data-closest-elem=".item">Delete Request</a>                                    
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center flex-wrap">
                                            <div class="user-img img-fluid flex-shrink-0">
                                            <img src="{{asset('images/user/08.jpg')}}" alt="story-img" class="rounded-circle avatar-40">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6>Manny Petty</h6>
                                                <p class="mb-0">3  friends</p>
                                            </div>
                                            <div class="d-flex align-items-center mt-2 mt-md-0">
                                                <a href="#" class="me-3 btn btn-primary rounded">Confirm</a>
                                                <a href="#" class="btn btn-secondary rounded" data-extra-toggle="delete" data-closest-elem=".item">Delete Request</a>                                    
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center  flex-wrap">
                                            <div class="user-img img-fluid flex-shrink-0">
                                            <img src="{{asset('images/user/09.jpg')}}" alt="story-img" class="rounded-circle avatar-40">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6>Marsha Mello</h6>
                                                <p class="mb-0">15  friends</p>
                                            </div>
                                            <div class="d-flex align-items-center mt-2 mt-md-0">
                                                <a href="#" class="me-3 btn btn-primary rounded">Confirm</a>
                                                <a href="#" class="btn btn-secondary rounded" data-extra-toggle="delete" data-closest-elem=".item">Delete Request</a>                                    
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center  flex-wrap">
                                            <div class="user-img img-fluid flex-shrink-0">
                                            <img src="{{asset('images/user/10.jpg')}}" alt="story-img" class="rounded-circle avatar-40">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6>Caire Innet</h6>
                                                <p class="mb-0">8  friends</p>
                                            </div>
                                            <div class="d-flex align-items-center mt-2 mt-md-0">
                                                <a href="#" class="me-3 btn btn-primary rounded">Confirm</a>
                                                <a href="#" class="btn btn-secondary rounded" data-extra-toggle="delete" data-closest-elem=".item">Delete Request</a>                                    
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center  flex-wrap">
                                            <div class="user-img img-fluid flex-shrink-0">
                                            <img src="{{asset('images/user/11.jpg')}}" alt="story-img" class="rounded-circle avatar-40">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6>Gio Metric</h6>
                                                <p class="mb-0">10  friends</p>
                                            </div>
                                            <div class="d-flex align-items-center mt-2 mt-md-0">
                                                <a href="#" class="me-3 btn btn-primary rounded">Confirm</a>
                                                <a href="#" class="btn btn-secondary rounded" data-extra-toggle="delete" data-closest-elem=".item">Delete Request</a>                                    
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center  flex-wrap">
                                            <div class="user-img img-fluid flex-shrink-0">
                                            <img src="{{asset('images/user/12.jpg')}}" alt="story-img" class="rounded-circle avatar-40">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6>Chris P. Cream</h6>
                                                <p class="mb-0">18  friends</p>
                                            </div>
                                            <div class="d-flex align-items-center mt-2 mt-md-0">
                                                <a href="#" class="me-3 btn btn-primary rounded">Confirm</a>
                                                <a href="#" class="btn btn-secondary rounded" data-extra-toggle="delete" data-closest-elem=".item">Delete Request</a>                                    
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center  flex-wrap">
                                            <div class="user-img img-fluid flex-shrink-0">
                                            <img src="{{asset('images/user/13.jpg')}}" alt="story-img" class="rounded-circle avatar-40">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6>Paul Misunday</h6>
                                                <p class="mb-0">6  friends</p>
                                            </div>
                                            <div class="d-flex align-items-center mt-2 mt-md-0">
                                                <a href="#" class="me-3 btn btn-primary rounded">Confirm</a>
                                                <a href="#" class="btn btn-secondary rounded" data-extra-toggle="delete" data-closest-elem=".item">Delete Request</a>                                    
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center  flex-wrap">
                                            <div class="user-img img-fluid flex-shrink-0">
                                            <img src="{{asset('images/user/14.jpg')}}" alt="story-img" class="rounded-circle avatar-40">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6>Reanne Carnation</h6>
                                                <p class="mb-0">12  friends</p>
                                            </div>
                                            <div class="d-flex align-items-center mt-2 mt-md-0">
                                                <a href="#" class="me-3 btn btn-primary rounded">Confirm</a>
                                                <a href="#" class="btn btn-secondary rounded" data-extra-toggle="delete" data-closest-elem=".item">Delete Request</a>                                    
                                            </div>
                                        </li>
                                        <li class="d-block text-center mb-0 pb-0">
                                            <a href="#" class="me-3 btn">View More Request</a>
                                        </li>
                                    </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show active" id="Gridview" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 mt-5">
                                        <div class="card">
                                        <div class="card-body">
                                            <div class="iq-badges text-left">
                                                <div class="badges-icon">
                                                    <img class="avatar-80 rounded" src="{{asset('images/badges/01.png')}}" alt="">
                                                </div>
                                                <h5 class="mb-2">Gold User</h5>
                                                <p>Richard McClintock, a Latin professor consectetur.</p>
                                                <span class="text-uppercase">Unlock Jan 15th, 2020</span>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 mt-5">
                                        <div class="card">
                                        <div class="card-body">
                                            <div class="iq-badges text-left">
                                                <div class="badges-icon">
                                                    <img class="avatar-80 rounded" src="{{asset('images/badges/02.png')}}" alt="">
                                                </div>
                                                <h5 class="mb-2">Gold User</h5>
                                                <p>Richard McClintock, a Latin professor consectetur.</p>
                                                <span class="text-uppercase">Unlock Jan 15th, 2020</span>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="row">
                                    <div class="col-lg-6 col-md-6 mt-5">
                                        <div class="card">
                                        <div class="card-body">
                                            <div class="iq-badges text-left">
                                                <div class="badges-icon">
                                                    <img class="avatar-80 rounded" src="{{asset('images/badges/01.png')}}" alt="">
                                                </div>
                                                <h5 class="mb-2">Gold User</h5>
                                                <p>Richard McClintock, a Latin professor consectetur.</p>
                                                <span class="text-uppercase">Unlock Jan 15th, 2020</span>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 mt-5">
                                        <div class="card">
                                        <div class="card-body">
                                            <div class="iq-badges text-left">
                                                <div class="badges-icon">
                                                    <img class="avatar-80 rounded" src="{{asset('images/badges/02.png')}}" alt="">
                                                </div>
                                                <h5 class="mb-2">Gold User</h5>
                                                <p>Richard McClintock, a Latin professor consectetur.</p>
                                                <span class="text-uppercase">Unlock Jan 15th, 2020</span>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex  justify-content-between">
                                <div class="me-3">
                                    <div class="iq-profile-avatar status-online">
                                        <img class="rounded-circle avatar-50" src="{{asset('images/user/03.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="w-100">
                                    <div class="d-flex justify-content-between">
                                        <div class="">
                                        <h5 class="mb-0 d-inline-block me-1"><a href="#" class="">Bni Cyst</a></h5>
                                        <p class="mb-0 d-inline-block">Share Anna Mull's Post</p>
                                        <p class="mb-0">5 hour ago</p>
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
                                                    <i class="ri-pencil-line h4"></i>
                                                    <div class="data ms-2">
                                                        <h6>Edit Post</h6>
                                                        <p class="mb-0">Update your post and saved items</p>
                                                    </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item p-3" href="#">
                                                    <div class="d-flex align-items-top">
                                                    <i class="ri-close-circle-line h4"></i>
                                                    <div class="data ms-2">
                                                        <h6>Hide From Timeline</h6>
                                                        <p class="mb-0">See fewer posts like this.</p>
                                                    </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item p-3" href="#">
                                                    <div class="d-flex align-items-top">
                                                    <i class="ri-delete-bin-7-line h4"></i>
                                                    <div class="data ms-2">
                                                        <h6>Delete</h6>
                                                        <p class="mb-0">Remove thids Post on Timeline</p>
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
                            <div class="user-post mt-2">
                                <a href="#"><img src="{{asset('images/page-img/p3.jpg')}}" alt="post-image" class="img-fluid w-100"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
    </div>


</x-app-layout>