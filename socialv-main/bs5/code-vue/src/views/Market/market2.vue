<template>
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="top-bg-image">
                    <img src="@/assets/images/page-img/56.jpg" class="img-fluid" alt="Responsive image">
                </div>
                <div class="card-body text-center">
                <div class="group-icon">
                    <img src="@/assets/images/user/11.png" alt="profile-img" class="avatar-130 img-fluid">
                </div>
                <h2 class="text-center">Roy</h2>
                <h5>098hgdvb53562...9056
                    <svg xmlns="http://www.w3.org/2000/svg" width="18px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                    </svg>
                </h5>
                <div class="mt-2">
                    <b>A good boy with a bed reputation</b>
                </div>
                <div class="mt-0">
                    <p>createing arts,game,photos for NFT platforms. folllow me and stay in trend</p>
                </div>
                <div>
                    <ul class=" d-flex ms-4 list-inline">
                        <li class="pe-3">
                            <a href="#"><img src="@/assets/images/icon/08.png" class="img-fluid rounded" alt="facebook"></a>
                        </li>
                        <li class="pe-3">
                            <a href="#"><img src="@/assets/images/icon/09.png" class="img-fluid rounded" alt="Twitter"></a>
                        </li>
                        <li class=" pe-3">
                            <a href="#"><img src="@/assets/images/icon/10.png" class="img-fluid rounded" alt="Instagram"></a>
                        </li>
                        <li class="pe-3">
                            <a href="#"><img src="@/assets/images/icon/13.png" class="img-fluid rounded" alt="linkedin"></a>
                        </li>
                    </ul>
                </div>
                <div class="d-flex d-flex justify-content-between">
                    Following:
                    <small>346</small>
                </div>
                    <div class="d-flex d-flex justify-content-between">
                    Followers:
                    <small>2k</small>
                </div>
                <button type="button" class="btn btn-primary rounded-pill w-100 mt-3">folllow</button>
            </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card cardnavbar">
                <div class="user-tabing">
                    <tab-nav :pills="true" extraclass="d-flex align-items-center nav-rounded profile-feed-items p-0 m-0" align="between">
                        <tab-nav-items :active="true" liClass="nav-item col-12 col-sm-2 p-0" href="#pills-sale-tab" dataToggle="pill" data-bs-target="#pills-sale-tab" role="button"><template v-slot:title>On sale</template></tab-nav-items>
                        <tab-nav-items liClass="nav-item col-12 col-sm-2 p-0" href="#pills-collection-tab" dataToggle="pill" data-bs-target="#pills-collection-tab" role="button"><template v-slot:title>Collectibles</template></tab-nav-items>
                        <tab-nav-items liClass="nav-item col-12 col-sm-2 p-0" href="#pills-created-tab" dataToggle="pill" data-bs-target="#pills-created-tab" role="button"><template v-slot:title>Created</template></tab-nav-items>
                        <tab-nav-items liClass="nav-item col-12 col-sm-2 p-0" href="#pills-liked-tab" dataToggle="pill" data-bs-target="#pills-liked-tab" role="button"><template v-slot:title>Liked</template></tab-nav-items>
                        <tab-nav-items liClass="nav-item col-12 col-sm-2 p-0" href="#pills-activity-tab" dataToggle="pill" data-bs-target="#pills-activity-tab" role="button"><template v-slot:title>Activity</template></tab-nav-items>
                    </tab-nav>
                </div>
            </div>
            <tab-content-item :active="true" id="pills-sale-tab">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="event-images position-relative">
                                    <a href="#">
                                    <img src="@/assets/images/page-img/51.jpg" class="img-fluid" alt="Responsive image">
                                    </a>
                                </div>
                                <span class="badge bg-danger">40% off</span>
                                <div class="mt-1">
                                    <h5>Fragments</h5>
                                </div>
                                <div class="mt-1">
                                    <small><small class="text-primary">0.080 ETH</small> 1 of 56</small>
                                </div>
                                <div class="mt-0">
                                    <small>Highest bid:<small class="text-primary ms-1">0.080 ETH</small></small>
                                </div>
                                <hr class="hr-horizontal">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <small><svg xmlns="http://www.w3.org/2000/svg" width="12px" class="mb-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg><small class="ms-1">6 hours ago</small>
                                        </small>
                                    </div>
                                        <small><svg xmlns="http://www.w3.org/2000/svg" width="12px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg><small class="ms-1">674</small></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="event-images">
                                    <a href="#">
                                    <img src="@/assets/images/page-img/59.jpg" class="img-fluid rounded" alt="Responsive image">                                    </a>
                                </div>
                                <span class="badge bg-danger">80% off</span>
                                <div class="mt-1">
                                    <h5>Shine brights_00</h5>
                                </div>
                                <div class="mt-1">
                                    <small><small class="text-primary">0.003 ETH</small> 1 of 2</small>
                                </div>
                                <div class="mt-0">
                                    <small>Highest bid:<small class="text-primary ms-1">0.004 ETH</small></small>
                                </div>
                                <hr class="hr-horizontal">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <small><svg xmlns="http://www.w3.org/2000/svg" width="12px" class="mb-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg><small class="ms-1">8 hours ago</small>
                                        </small>
                                    </div>
                                        <small><svg xmlns="http://www.w3.org/2000/svg" width="12px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg><small class="ms-1">36</small></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="event-images">
                                    <a href="#">
                                    <img src="@/assets/images/page-img/55.jpg" class="img-fluid" alt="Responsive image">
                                    </a>
                                    <span class="badge bg-danger">30% off</span>
                                </div>
                                <div class="mt-1">
                                    <h5>Anonimoic face </h5>
                                </div>
                                <div class="mt-1">
                                    <small><small class="text-primary">0.034 ETH</small> 1 of 56</small>
                                </div>
                                <div class="mt-0">
                                    <small>Highest bid:<small class="text-primary ms-1">0.045 ETH</small></small>
                                </div>
                                <hr class="hr-horizontal">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <small><svg xmlns="http://www.w3.org/2000/svg" width="12px" class="mb-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg><small class="ms-1">8 days ago</small>
                                        </small>
                                    </div>
                                        <small><svg xmlns="http://www.w3.org/2000/svg" width="12px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg><small class="ms-1">1k</small></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="event-images">
                                    <a href="#">
                                    <img src="@/assets/images/page-img/54.jpg" class="img-fluid" alt="Responsive image">
                                    </a>
                                </div>
                                <span class="badge bg-danger">70% off</span>
                                <div class="mt-1">
                                    <h5>Fire magic</h5>
                                </div>
                                <div class="mt-1">
                                    <small><small class="text-primary">0.009 ETH</small> 1 of 1</small>
                                </div>
                                <div class="mt-0">
                                    <small>Highest bid:<small class="text-primary ms-1">0.012ETH</small></small>
                                </div>
                                <hr class="hr-horizontal">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <small><svg xmlns="http://www.w3.org/2000/svg" width="12px" class="mb-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg><small class="ms-1">12 hours ago</small>
                                        </small>
                                    </div>
                                        <small><svg xmlns="http://www.w3.org/2000/svg" width="12px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg><small class="ms-1">786</small></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="event-images">
                                    <a href="#">
                                    <img src="@/assets/images/page-img/53.jpg" class="img-fluid rounded" alt="Responsive image">
                                    </a>
                                </div>
                                <span class="badge bg-danger">50% off</span>
                                <div class="mt-1">
                                    <h5>Smileface</h5>
                                </div>
                                <div class="mt-1">
                                    <small><small class="text-primary">0.045 ETH</small> 1 of 1</small>
                                </div>
                                <div class="mt-0">
                                    <small>Highest bid:<small class="text-primary ms-1">0.048 ETH</small></small>
                                </div>
                                <hr class="hr-horizontal">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <small><svg xmlns="http://www.w3.org/2000/svg" width="12px" class="mb-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg><small class="ms-1">1 days ago</small>
                                        </small>
                                    </div>
                                        <small><svg xmlns="http://www.w3.org/2000/svg" width="12px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg><small class="ms-1">3k</small></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </tab-content-item>
        </div>
        <tab-content-item id="pills-collection-tab">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="event-images position-relative">
                                    <a href="#">
                                    <img src="@/assets/images/page-img/51.jpg" class="img-fluid" alt="Responsive image">
                                    </a>
                                </div>
                                <div class="mt-1">
                                    <h5>Fragments</h5>
                                </div>
                                <div class="mt-1">
                                    <small><small class="text-primary">0.080 ETH</small> 1 of 56</small>
                                </div>
                                <div class="mt-0">
                                    <small>Highest bid:<small class="text-primary ms-1">0.080 ETH</small></small>
                                </div>
                                <hr class="hr-horizontal">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <small><svg xmlns="http://www.w3.org/2000/svg" width="12px" class="mb-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg><small class="ms-1">6 hours ago</small>
                                        </small>
                                    </div>
                                        <small><svg xmlns="http://www.w3.org/2000/svg" width="12px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg><small class="ms-1">674</small></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="event-images">
                                    <a href="#">
                                    <img src="@/assets/images/page-img/59.jpg" class="img-fluid rounded" alt="Responsive image">                                    </a>
                                </div>
                                <div class="mt-1">
                                    <h5>Shine brights_00</h5>
                                </div>
                                <div class="mt-1">
                                    <small><small class="text-primary">0.003 ETH</small> 1 of 2</small>
                                </div>
                                <div class="mt-0">
                                    <small>Highest bid:<small class="text-primary ms-1">0.004 ETH</small></small>
                                </div>
                                <hr class="hr-horizontal">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <small><svg xmlns="http://www.w3.org/2000/svg" width="12px" class="mb-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg><small class="ms-1">8 hours ago</small>
                                        </small>
                                    </div>
                                        <small><svg xmlns="http://www.w3.org/2000/svg" width="12px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg><small class="ms-1">36</small></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="event-images">
                                    <a href="#">
                                    <img src="@/assets/images/page-img/55.jpg" class="img-fluid" alt="Responsive image">
                                    </a>
                                </div>
                                <div class="mt-1">
                                    <h5>Anonimoic face </h5>
                                </div>
                                <div class="mt-1">
                                    <small><small class="text-primary">0.034 ETH</small> 1 of 56</small>
                                </div>
                                <div class="mt-0">
                                    <small>Highest bid:<small class="text-primary ms-1">0.045 ETH</small></small>
                                </div>
                                <hr class="hr-horizontal">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <small><svg xmlns="http://www.w3.org/2000/svg" width="12px" class="mb-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg><small class="ms-1">8 days ago</small>
                                        </small>
                                    </div>
                                        <small><svg xmlns="http://www.w3.org/2000/svg" width="12px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg><small class="ms-1">1k</small></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="event-images">
                                    <a href="#">
                                    <img src="@/assets/images/page-img/54.jpg" class="img-fluid" alt="Responsive image">
                                    </a>
                                </div>
                                <div class="mt-1">
                                    <h5>Fire magic</h5>
                                </div>
                                <div class="mt-1">
                                    <small><small class="text-primary">0.009 ETH</small> 1 of 1</small>
                                </div>
                                <div class="mt-0">
                                    <small>Highest bid:<small class="text-primary ms-1">0.012ETH</small></small>
                                </div>
                                <hr class="hr-horizontal">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <small><svg xmlns="http://www.w3.org/2000/svg" width="12px" class="mb-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg><small class="ms-1">12 hours ago</small>
                                        </small>
                                    </div>
                                        <small><svg xmlns="http://www.w3.org/2000/svg" width="12px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg><small class="ms-1">786</small></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="event-images">
                                    <a href="#">
                                    <img src="@/assets/images/page-img/52.jpg" class="img-fluid" alt="Responsive image">
                                    </a>
                                </div>
                                <div class="mt-1">
                                    <h5>Edition _02</h5>
                                </div>
                                <div class="mt-1">
                                    <small><small class="text-primary">0.002 ETH</small> 1 of 6</small>
                                </div>
                                <div class="mt-0">
                                    <small>Highest bid:<small class="text-primary ms-1">0.080 ETH</small></small>
                                </div>
                                <hr class="hr-horizontal">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <small><svg xmlns="http://www.w3.org/2000/svg" width="12px" class="mb-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg><small class="ms-1">12 hours ago</small>
                                        </small>
                                    </div>
                                        <small><svg xmlns="http://www.w3.org/2000/svg" width="12px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg><small class="ms-1">45</small></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="event-images">
                                    <a href="#">
                                    <img src="@/assets/images/page-img/53.jpg" class="img-fluid rounded" alt="Responsive image">
                                    </a>
                                </div>
                                <div class="mt-1">
                                    <h5>Smileface</h5>
                                </div>
                                <div class="mt-1">
                                    <small><small class="text-primary">0.045 ETH</small> 1 of 1</small>
                                </div>
                                <div class="mt-0">
                                    <small>Highest bid:<small class="text-primary ms-1">0.048 ETH</small></small>
                                </div>
                                <hr class="hr-horizontal">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <small><svg xmlns="http://www.w3.org/2000/svg" width="12px" class="mb-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg><small class="ms-1">1 days ago</small>
                                        </small>
                                    </div>
                                        <small><svg xmlns="http://www.w3.org/2000/svg" width="12px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg><small class="ms-1">3k</small></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </tab-content-item>
        <tab-content-item id="pills-liked-tab">
            <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <div class="event-images position-relative">
                            <a href="#">
                            <img src="@/assets/images/page-img/51.jpg" class="img-fluid" alt="Responsive image">
                            </a>
                        </div>
                        <hr class="hr-horizontal">
                        <div class="d-flex justify-content-between">
                            <div>
                                <small><svg xmlns="http://www.w3.org/2000/svg" width="12px" class="mb-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg><small class="ms-1">6 hours ago</small>
                                </small>
                            </div>
                                <small><svg xmlns="http://www.w3.org/2000/svg" width="12px" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" /></svg><small class="ms-1">674</small></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <div class="event-images">
                            <a href="#">
                            <img src="@/assets/images/page-img/59.jpg" class="img-fluid rounded" alt="Responsive image">                                    </a>
                        </div>
                        <hr class="hr-horizontal">
                        <div class="d-flex justify-content-between">
                            <div>
                                <small><svg xmlns="http://www.w3.org/2000/svg" width="12px" class="mb-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg><small class="ms-1">8 hours ago</small>
                                </small>
                            </div>
                                <small><svg xmlns="http://www.w3.org/2000/svg" width="12px" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                                </svg><small class="ms-1">36</small></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <div class="event-images">
                            <a href="#">
                            <img src="@/assets/images/page-img/55.jpg" class="img-fluid" alt="Responsive image">
                            </a>
                        </div>
                        <hr class="hr-horizontal">
                        <div class="d-flex justify-content-between">
                            <div>
                                <small><svg xmlns="http://www.w3.org/2000/svg" width="12px" class="mb-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg><small class="ms-1">8 days ago</small>
                                </small>
                            </div>
                            <div>
                                <small><svg xmlns="http://www.w3.org/2000/svg" width="12px" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/></svg><small class="ms-1">1k</small></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </tab-content-item>
        <tab-content-item id="pills-activity-tab">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">your comments</h4>
                        </div>
                </div>
                <div class="card-body">
                        <div class="align-items-center d-flex borderbox1 flex-wrap">
                                <img src="@/assets/images/user/02.jpg" alt="userimg" class="avatar-20 rounded-circle">
                                <h6 class="ms-1">theodocre</h6>
                                <a class="ms-1" href="#">@john_ram</a>
                                <div class="ms-auto d-flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10px" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="mx-1"><small>35 mins</small></span>
                                </div>
                        </div>
                    <p>In any moment of decsion, the best thing of you can do thing,the next best thing is the wrong thing,and the worst thing of</p>
                        <div class="align-items-center d-flex borderbox1 flex-wrap">
                                <img src="@/assets/images/user/03.jpg" alt="userimg" class="avatar-20 rounded-circle">
                                <h6 class="ms-1">theodocre</h6>
                                <a class="ms-1" href="#">@john_ram</a>
                                <div class="ms-auto d-flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10px" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="mx-1"><small>15 mins</small></span>
                                </div>
                        </div>
                    <p>great pictures!!</p>
                </div>
            </div>
        </tab-content-item>
        <tab-content-item id="pills-created-tab">
            <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <div class="event-images position-relative">
                            <a href="#">
                            <img src="@/assets/images/page-img/51.jpg" class="img-fluid" alt="Responsive image">
                            </a>
                        </div>
                        <div class="mt-1">
                            <h5>Fragments</h5>
                        </div>
                        <div class="mt-1">
                            <small><small class="text-primary">0.080 ETH</small> 1 of 56</small>
                        </div>
                        <div class="mt-0">
                            <small>Highest bid:<small class="text-primary ms-1">0.080 ETH</small></small>
                        </div>
                        <hr class="hr-horizontal">
                        <div class="d-flex justify-content-between">
                            <div>
                                <small><svg xmlns="http://www.w3.org/2000/svg" width="12px" class="mb-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg><small class="ms-1">6 hours ago</small>
                                </small>
                            </div>
                                <small><svg xmlns="http://www.w3.org/2000/svg" width="12px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg><small class="ms-1">674</small></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <div class="event-images">
                            <a href="#">
                            <img src="@/assets/images/page-img/59.jpg" class="img-fluid rounded" alt="Responsive image">                                    </a>
                        </div>
                        <div class="mt-1">
                            <h5>Shine brights_00</h5>
                        </div>
                        <div class="mt-1">
                            <small><small class="text-primary">0.003 ETH</small> 1 of 2</small>
                        </div>
                        <div class="mt-0">
                            <small>Highest bid:<small class="text-primary ms-1">0.004 ETH</small></small>
                        </div>
                        <hr class="hr-horizontal">
                        <div class="d-flex justify-content-between">
                            <div>
                                <small><svg xmlns="http://www.w3.org/2000/svg" width="12px" class="mb-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg><small class="ms-1">8 hours ago</small>
                                </small>
                            </div>
                                <small><svg xmlns="http://www.w3.org/2000/svg" width="12px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg><small class="ms-1">36</small></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <div class="event-images">
                            <a href="#">
                            <img src="@/assets/images/page-img/55.jpg" class="img-fluid" alt="Responsive image">
                            </a>
                        </div>
                        <div class="mt-1">
                            <h5>Anonimoic face </h5>
                        </div>
                        <div class="mt-1">
                            <small><small class="text-primary">0.034 ETH</small> 1 of 56</small>
                        </div>
                        <div class="mt-0">
                            <small>Highest bid:<small class="text-primary ms-1">0.045 ETH</small></small>
                        </div>
                        <hr class="hr-horizontal">
                        <div class="d-flex justify-content-between">
                            <div>
                                <small><svg xmlns="http://www.w3.org/2000/svg" width="12px" class="mb-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg><small class="ms-1">8 days ago</small>
                                </small>
                            </div>
                                <small><svg xmlns="http://www.w3.org/2000/svg" width="12px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg><small class="ms-1">1k</small></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </tab-content-item>
    </div>
</template>
<script>
export default {
  name: 'market1'
}
</script>
