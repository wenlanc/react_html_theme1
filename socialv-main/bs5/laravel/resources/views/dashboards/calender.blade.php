
<x-app-layout>
    
    <div class="header-for-bg">
            <div class="background-header position-relative">
               <img src="images/page-img/profile-bg6.jpg" class="img-fluid w-100" alt="profile-bg">
               <div class="title-on-header">
                  <div class="data-block">
                     <h2>Calender and Events</h2>
                  </div>
               </div>
            </div>
    </div>
    <div id="content-page" class="content-page">
        <div class="container">
            <div class="row row-eq-height">
                <div class="col-md-4 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="input-group">
                                <div class="vanila-datepicker"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title ">Classification</h4>
                        </div>
                        <div class="card-header-toolbar d-flex align-items-center">
                            <a href="#"><i class="fa fa-plus  mr-0" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="m-0 p-0 job-classification list-inline">
                            <li class=""><i class="ri-check-line bg-danger"></i>Meeting</li>
                            <li class=""><i class="ri-check-line bg-success"></i>Business travel</li>
                            <li class=""><i class="ri-check-line bg-warning"></i>Personal Work</li>
                            <li class=""><i class="ri-check-line bg-info"></i>Team Project</li>
                        </ul>
                    </div>
                    </div>
                    <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Today's Schedule</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="m-0 p-0 today-schedule">
                            <li class="d-flex">
                                <div class="schedule-icon"><i class="ri-checkbox-blank-circle-fill text-primary"></i></div>
                                <div class="schedule-text"> <span>Web Design</span>
                                <span>09:00 to 12:00</span>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="schedule-icon"><i class="ri-checkbox-blank-circle-fill text-success"></i></div>
                                <div class="schedule-text"> <span>Participate in Design</span>
                                <span>09:00 to 12:00</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    </div>
                </div>
                <div class="col-md-8 col-lg-9">
                    <div class="card">
                    <div class="card-header d-flex justify-content-between flex-wrap">
                        <div class="header-title">
                            <h4 class="card-title">Book Appointment</h4>
                        </div>
                        <div class="card-header-toolbar d-flex align-items-center mt-1 mt-md-0">
                            <a href="#" class="btn btn-primary"><i class="ri-add-line mr-2"></i>Book Appointment</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="calendar1" class="calendar-s"></div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>
