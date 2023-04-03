
<div class="iq-sidebar sidebar-default">
    <div id="sidebar-scrollbar">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">
                <li class="{{activeRoute('index')}}">
                    <a href="{{route('index')}}" class=" "> 
                        <i class="las la-newspaper"></i><span>Newsfeed</span>
                    </a>
                </li>
                <li class="{{activeRoute('profile')}}">
                   <a href="{{route('profile')}}" class=" ">
                       <i class="las la-user"></i><span>Profile</span>
                    </a>
                </li>
            
                <li class="{{activeRoute('friendlist')}}">
                   <a href="{{route('friendlist')}}" class=" ">
                       <i class="las la-user-friends"></i><span>Friend List</span>
                    </a>
                </li>
                <li class="{{activeRoute('friendprofile')}}">
                   <a href="{{route('friendprofile')}}" class=" ">
                       <i class="las la-user-friends"></i><span>Friend Profile</span>
                    </a>
                </li>
                <li class="{{activeRoute('group')}}">
                   <a href="{{route('group')}}" class=" ">
                       <i class="las la-users"></i><span>Group</span>
                    </a>
                </li>
                <li class="{{activeRoute('proimg')}} ">
                    <a href="{{route('proimg')}}" class=" ">
                        <i class="las la-image"></i><span>Profile Image</span>
                    </a>
                </li>
                <li class="{{activeRoute('provideos')}}">
                    <a href="{{route('provideos')}}" class=" ">
                        <i class="las la-video"></i><span>Profile Video</span>
                    </a>
                </li>
                 <li class="{{activeRoute('profilevent')}} ">
                    <a href="{{route('profilevent')}}" class=" ">
                        <i class="las la-film"></i><span>Profile Events</span>
                    </a>
                </li>
                 <li class="{{activeRoute('profilebadges')}} ">
                    <a href="{{route('profilebadges')}}" class=" ">
                        <i class="las la-certificate"></i><span>Profile Badges</span>
                    </a>
                </li>
                 <li class="{{activeRoute('profileforum')}}">
                    <a href="{{route('profileforum')}}" class=" ">
                        <i class="lab la-wpforms"></i><span>Profile Profileforum</span>
                    </a>
                </li>
                <li class="{{activeRoute('notification')}} ">
                   <a href="{{route('notification')}}" class=" ">
                       <i class="las la-bell"></i><span>Notification</span>
                    </a>
                </li>
                <li class="{{activeRoute('file')}} ">
                    <a href="{{route('file')}}" class=" ">
                        <i class="las la-file"></i><span>Files</span>
                    </a>
                </li>
                <li class="{{activeRoute('friendrequest')}} ">
                     <a href="{{route('friendrequest')}}" class=" ">
                        <i class="las la-anchor"></i><span>Friend Request</span>
                    </a>
                </li>
                <li class="{{activeRoute('chat')}}">
                     <a href="{{route('chat')}}" class=" ">
                        <i class="lab la-rocketchat"></i><span>Chat</span>
                    </a>
                </li>
                <li class="{{activeRoute('todo')}} ">
                    <a href="{{route('todo')}}" class=" ">
                        <i class="las la-check-circle"></i><span>Todo</span>
                    </a>
                </li>
                <li class="{{activeRoute('calender')}} ">
                   <a href="{{route('calender')}}" class=" ">
                       <i class="las la-calendar"></i><span>Calendar</span>
                    </a>
                </li>
                <li class="{{activeRoute('birthday')}} ">
                   <a href="{{route('birthday')}}" class=" ">
                       <i class="las la-birthday-cake"></i><span>Birthday</span>
                    </a>
                </li>
                <li class="{{activeRoute('weather')}}">
                    <a href="{{route('weather')}}" class=" ">
                        <i class="ri-snowy-line"></i><span>Weather</span>
                    </a>
                </li>
                <li class="{{activeRoute('music')}}">
                     <a href="{{route('music')}}" class=" ">
                        <i class="ri-play-circle-line"></i><span>Music</span>
                    </a>
                </li>
                <li class=" ">
                    <a href="#market" data-bs-toggle="collapse" class="  collapsed" aria-expanded="false">
                        <i class="las la-poll"></i><span>MarketPlace</span><i
                            class="ri-arrow-right-s-line iq-arrow-right"></i>
                    </a>
                    <ul id="market" class="iq-submenu collapse" data-bs-parent="#iq-sidebar-toggle">
                        <li class="{{activeRoute('market/market1')}}">
                            <a href="{{route('market.market1')}}"><i class="las la-poll-h"></i>Market 1</a>
                        </li>
                        <li class="{{activeRoute('market/market2')}}">
                            <a href="{{route('market.market2')}}"><i class="ri-list-check-2"></i>Market 2</a>
                        </li>
                    </ul>
                </li>
                 <li class=" ">
                    <a href="#profiles" data-bs-toggle="collapse" class="  collapsed" aria-expanded="false">
                        <i class="far fa-id-badge"></i><span>Profiles</span><i
                            class="ri-arrow-right-s-line iq-arrow-right"></i>
                    </a>
                    <ul id="profiles" class="iq-submenu collapse" data-bs-parent="#iq-sidebar-toggle">
                        <li class="{{activeRoute('profile/profile1')}}">
                            <a href="{{route('profile.profile1')}}"><i class=" ri-grid-line"></i>Profile 1</a>
                        </li>
                        <li class="{{activeRoute('profile/profile2')}}">
                            <a href="{{route('profile.profile2')}}"><i class="ri-list-check-2"></i>Profile 2</a>
                        </li>
                        <li class="{{activeRoute('profile/profile3')}}">
                            <a href="{{route('profile.profile3')}}"><i class="ri-list-check-2"></i>Profile 3</a>
                        </li>
                    </ul>
                </li>
                
                <li class=" ">
                    <a href="#blog" data-bs-toggle="collapse" class="collapsed" aria-expanded="false">
                        <i class="lab la-blogger"></i><span>Blog</span>
                           <i class="ri-arrow-right-s-line iq-arrow-right"></i>
                    </a>
                    <ul id="blog" class="iq-submenu collapse" data-bs-parent="#iq-sidebar-toggle">
                        <li class="{{activeRoute('blog/bloggrid')}}">
                            <a href="{{route('blog.bloggrid')}}"><i class="ri-grid-line"></i>Blog Grid</a>
                        </li>
                        <li class="{{activeRoute('blog/bloglist')}}">
                            <a href="{{route('blog.bloglist')}}"><i class="ri-list-check-2"></i>Blog List</a>
                        </li>
                        <li class="{{activeRoute('blog/blogdetail')}}">
                            <a href="{{route('blog.blogdetail')}}"><i class="ri-information-line"></i>Blog Detail</a>
                        </li>
                    </ul>
                </li>
                 <li class=" ">
                    <a href="#store" data-bs-toggle="collapse" class="  collapsed" aria-expanded="false">
                        <i class="las la-store"></i><span>Store</span><i
                            class="ri-arrow-right-s-line iq-arrow-right"></i>
                    </a>
                    <ul id="store" class="iq-submenu collapse" data-bs-parent="#iq-sidebar-toggle">
                        <li class="{{activeRoute('store/grid')}}">
                            <a href="{{route('store.grid')}}"><i class="  ri-grid-line"></i>Category Grid</a>
                        </li>
                        <li class="{{activeRoute('store/list')}}">
                            <a href="{{route('store.list')}}"><i class="ri-list-check-2"></i>Category list</a>
                        </li>
                        <li class="{{activeRoute('store/detail')}}">
                            <a href="{{route('store.detail')}}"><i class="ri-information-line"></i>Store Detail</a>
                        </li>
                        <li class="{{activeRoute('store/checkout')}}">
                            <a href="{{route('store.checkout')}}"><i class="ri-chat-check-line"></i>Checkout</a>
                        </li>
                    </ul>
                </li>
                <li class=" ">
                    <a href="#mailbox" data-bs-toggle="collapse" class="  collapsed" aria-expanded="false">
                        <i class="ri-mail-line"></i><span>Email</span><i
                            class="ri-arrow-right-s-line iq-arrow-right"></i>
                    </a>
                    <ul id="mailbox" class="iq-submenu collapse" data-bs-parent="#iq-sidebar-toggle">
                        <li class="{{activeRoute('mailbox/email')}}">
                            <a href="{{route('mailbox.email')}}"><i class="  ri-inbox-line"></i>Inbox</a>
                        </li>
                        <li class="{{activeRoute('mailbox/emailcompose')}}">
                            <a href="{{route('mailbox.emailcompose')}}"><i class="ri-edit-line"></i>Email Compose</a>
                        </li>
                    </ul>
                </li>
                 <li class=" ">
                    <a href="#ui-elements" data-bs-toggle="collapse" class="  collapsed" 
                        aria-expanded="false"><i class="ri-focus-2-line"></i><span>Ui-Elements</span><i
                            class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="ui-elements" class="iq-submenu collapse"
                    data-bs-parent="#iq-sidebar-toggle">
                        <li class=" ">
                            <a href="#ui-kit"  data-bs-toggle="collapse" class="  collapsed"
                                aria-expanded="false"><i class="ri-pencil-ruler-line"></i><span>UI Kit</span><i
                                    class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                            <ul id="ui-kit" class="iq-submenu collapse" data-bs-parent="#ui-elements">
                                <li class="{{activeRoute('ui/uicolor')}}">
                                    <a href="{{route('ui.uicolor')}}"><i class="ri-font-color"></i>Colors</a>
                                </li>
                                <li class="{{activeRoute('ui/uitypography')}}">
                                    <a href="{{route('ui.uitypography')}}"><i class="ri-text"></i>Typography</a>
                                </li>
                                <li class="{{activeRoute('ui/uialert')}}">
                                    <a href="{{route('ui.uialert')}}"><i class="ri-alert-line"></i>Alerts</a>
                                </li>
                                <li class="{{activeRoute('ui/uibadges')}}">
                                    <a href="{{route('ui.uibadges')}}"><i class="ri-building-3-line"></i>Badges</a>
                                </li>
                                <li class="{{activeRoute('ui/uibreadcrumb')}}">
                                    <a href="{{route('ui.uibreadcrumb')}}"><i class="ri-menu-2-line"></i>Breadcrumb</a>
                                </li>
                                <li class="{{activeRoute('ui/uibutton')}}">
                                    <a href="{{route('ui.uibutton')}}"><i class="ri-checkbox-blank-line"></i>Buttons</a>
                                </li>
                                <li class="{{activeRoute('ui/uicard')}}">
                                    <a href="{{route('ui.uicard')}}"><i class="ri-bank-card-line"></i>Cards</a>
                                </li>
                                <li class="{{activeRoute('ui/uicarousel')}}">
                                    <a href="{{route('ui.uicarousel')}}"><i class="ri-slideshow-line"></i>Carousel</a>
                                </li>
                                <li class="{{activeRoute('ui/uiemvideo')}}">
                                    <a href="{{route('ui.uiemvideo')}}"><i class="ri-slideshow-2-line"></i>Video</a>
                                </li>
                                <li class="{{activeRoute('ui/uigrid')}}">
                                    <a href="{{route('ui.uigrid')}}"><i class="ri-grid-line"></i>Grid</a>
                                </li>
                                <li class="{{activeRoute('ui/uiimages')}}">
                                    <a href="{{route('ui.uiimages')}}"><i class="ri-image-line"></i>Images</a>
                                </li>
                                <li class="{{activeRoute('ui/uilistitems')}}">
                                    <a href="{{route('ui.uilistitems')}}"><i class="ri-file-list-3-line"></i>list Group</a>
                                </li>
                                <li class="{{activeRoute('ui/uimodal')}}">
                                    <a href="{{route('ui.uimodal')}}"><i class="ri-stop-mini-line"></i>Modal</a>
                                </li>
                                <li class="{{activeRoute('ui/uinotification')}}">
                                    <a href="{{route('ui.uinotification')}}"><i class="ri-notification-line"></i>Notifications</a>
                                </li>
                                <li class="{{activeRoute('ui/uipagination')}}">
                                    <a href="{{route('ui.uipagination')}}"><i class="ri-pages-line"></i>Pagination</a>
                                </li>
                                <li class="{{activeRoute('ui/uipopovers')}}">
                                    <a href="{{route('ui.uipopovers')}}"><i class="ri-folder-shield-2-line"></i>Popovers</a>
                                </li>
                                <li class="{{activeRoute('ui/uiprogressbars')}}">
                                    <a href="{{route('ui.uiprogressbars')}}"><i class="ri-battery-low-line"></i>Progressbars</a>
                                </li>
                                <li class="{{activeRoute('ui/uitabs')}}">
                                    <a href="{{route('ui.uitabs')}}"><i class="ri-database-line"></i>Tabs</a>
                                </li>
                                <li class="{{activeRoute('ui/uitooltips')}}">
                                    <a href="{{route('ui.uitooltips')}}"><i class="ri-record-mail-line"></i>Tooltips</a>
                                </li>
                            </ul>
                        </li>
                        <li class=" ">
                            <a href="#forms" class="  collapsed" data-bs-toggle="collapse"
                                aria-expanded="false"><i class="ri-profile-line"></i><span>Forms</span><i
                                    class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                            <ul id="forms" class="iq-submenu collapse" data-bs-parent="#ui-elements">
                                <li class="{{activeRoute('ui/formlayout')}}">
                                    <a href="{{route('ui.formlayout')}}"><i class="ri-tablet-line"></i>Form Elements</a>
                                </li>
                                <li class="{{activeRoute('ui/formvalidation')}}">
                                    <a href="{{route('ui.formvalidation')}}"><i class="ri-device-line"></i>Form
                                        Validation</a></li>
                                <li class="{{activeRoute('ui/formswitch')}}">
                                    <a href="{{route('ui.formswitch')}}"><i class="ri-toggle-line"></i>Form Switch</a>
                                </li>
                                <li class="{{activeRoute('ui/formcheckbox')}}">
                                    <a href="{{route('ui.formcheckbox')}}"><i class="ri-checkbox-line"></i>Form
                                        Checkbox</a></li>
                                <li class="{{activeRoute('ui/formradio')}}">
                                    <a href="{{route('ui.formradio')}}"><i class="ri-radio-button-line"></i>Form Radio</a>
                                </li>
                            </ul>
                        </li>
                        <li class=" ">
                            <a href="#wizard-form" class="  collapsed" data-bs-toggle="collapse"
                                aria-expanded="false"><i class="ri-archive-drawer-line"></i><span>Forms
                                    Wizard</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                            <ul id="wizard-form" class="iq-submenu collapse" data-bs-parent="#ui-elements">
                                <li class="{{activeRoute('ui/formwizard')}}">
                                    <a href="{{route('ui.formwizard')}}"><i class="ri-clockwise-line"></i>Simple Wizard</a>
                                </li>
                                <li class="{{activeRoute('ui/formwizardvalidate')}}">
                                    <a href="{{route('ui.formwizardvalidate')}}"><i class="ri-clockwise-2-line"></i>Validate Wizard</a>
                                </li>
                                <li class="{{activeRoute('ui/formwizardvertical')}}">
                                    <a href="{{route('ui.formwizardvertical')}}"><i class="ri-anticlockwise-line"></i>Vertical Wizard</a>
                                </li>
                            </ul>
                        </li>
                        <li class=" about-info">
                            <a href="#tables" class="  collapsed" data-bs-toggle="collapse"
                                aria-expanded="false"><i class="ri-table-line"></i><span>Table</span><i
                                    class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                            <ul id="tables" class="iq-submenu collapse" data-bs-parent="#ui-elements">
                                <li class="{{activeRoute('ui/tablebasic')}}">
                                    <a href="{{route('ui.tablebasic')}}"><i class="ri-table-line"></i>Basic Tables</a>
                                </li>
                                <li class="{{activeRoute('ui/datatable')}}">
                                    <a href="{{route('ui.datatable')}}"><i class="ri-database-line"></i>Data Table</a>
                                </li>
                                <li class="{{activeRoute('ui/tableedit')}}">
                                    <a href="{{route('ui.tableedit')}}"><i class="ri-refund-line"></i>Editable Table</a></li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="#icons" class="  collapsed" data-bs-toggle="collapse"
                                aria-expanded="false"><i class="ri-list-check"></i><span>Icons</span><i
                                    class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                            <ul id="icons" class="iq-submenu collapse" data-bs-parent="#ui-elements">
                                <li class="{{activeRoute('ui/iconfontawsome')}}">
                                    <a href="{{route('ui.iconfontawsome')}}"><i class="ri-facebook-fill"></i>Font Awesome 5</a>
                                </li>
                                <li class="{{activeRoute('ui/iconlineawsome')}}">
                                    <a href="{{route('ui.iconlineawsome')}}"><i class="ri-keynote-line"></i>line Awesome</a>
                                </li>
                                <li class="{{activeRoute('ui/iconremixon')}}">
                                    <a href="{{route('ui.iconremixon')}}"><i class="ri-remixicon-line"></i>Remixicon</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="#pages" class="  collapsed" data-bs-toggle="collapse"
                        aria-expanded="false"><i class="ri-pages-line"></i><span>Pages</span><i
                            class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="pages" class="iq-submenu collapse" data-bs-parent="#iq-sidebar-toggle">
                        <li class=" ">
                            <a href="#authentication" class="  collapsed" data-bs-toggle="collapse"
                                aria-expanded="false"><i class="ri-pages-line"></i><span>Authentication</span><i
                                    class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                            <ul id="authentication" class="iq-submenu collapse" data-bs-parent="#pages">
                                <li class="{{activeRoute('pages/signin')}}">
                                    <a href="{{route('pages.signin')}}"><i class="ri-login-box-line"></i>Login</a>
                                </li>
                                <li class="{{activeRoute('pages/signup')}}">
                                    <a href="{{route('pages.signup')}}"><i class="ri-login-circle-line"></i>Register</a>
                                </li>
                                <li class="{{activeRoute('pages/pagerecover')}}">
                                    <a href="{{route('pages.pagerecover')}}"><i class="ri-record-mail-line"></i>Recover Password</a>
                                </li>
                                <li class="{{activeRoute('pages/pageconfirmail')}}">
                                    <a href="{{route('pages.pageconfirmail')}}"><i class="ri-file-code-line"></i>Confirm Mail</a>
                                </li>
                                <li class="{{activeRoute('pages/lockscreen')}}">
                                    <a href="{{route('pages.lockscreen')}}"><i class="ri-lock-line"></i>Lock Screen</a>
                                </li>
                            </ul>
                        </li>
                        <li class=" ">
                            <a href="#extra-pages" class="  collapsed" data-bs-toggle="collapse"
                                aria-expanded="false"><i class="ri-pantone-line"></i><span>Extra Pages</span><i
                                    class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                            <ul id="extra-pages" class="iq-submenu collapse" data-bs-parent="#pages">
                                <li class="{{activeRoute('pages/timeline')}}">
                                    <a href="{{route('pages.timeline')}}"><i class="ri-map-pin-time-line"></i>Timeline</a>
                                </li>
                                <li class="{{activeRoute('pages/invoice')}}">
                                    <a href="{{route('pages.invoice')}}"><i class="ri-question-answer-line"></i>Invoice</a>
                                </li>
                                <li class="{{activeRoute('pages/blankpage')}}">
                                    <a href="{{route('pages.blankpage')}}"><i class="ri-invision-line"></i>Blank Page</a>
                                </li>
                                <li class="{{activeRoute('pages/error')}}">
                                    <a href="{{route('pages.error')}}"><i class="ri-error-warning-line"></i>Error 404</a>
                                </li>
                                <li class="{{activeRoute('pages/error500')}}">
                                    <a href="{{route('pages.error500')}}"><i class="ri-error-warning-line"></i>Error 500</a>
                                </li>
                                <li class="{{activeRoute('pages/pricing')}}">
                                    <a href="{{route('pages.pricing')}}"><i class="ri-price-tag-line"></i>Pricing</a>
                                </li>
                                <li class="{{activeRoute('pages/pricingone')}}">
                                    <a href="{{route('pages.pricingone')}}"><i class="ri-price-tag-2-line"></i>Pricing 1</a>
                                </li>
                                <li class="{{activeRoute('pages/maintenance')}}">
                                    <a href="{{route('pages.maintenance')}}"><i class="ri-archive-line"></i>Maintenance</a>
                                </li>
                                <li class="{{activeRoute('pages/comingsoon')}}">
                                    <a href="{{route('pages.comingsoon')}}"><i class="ri-mastercard-line"></i>Coming Soon</a>
                                </li>
                                <li class="{{activeRoute('pages/faq')}}">
                                    <a href="{{route('pages.faq')}}"><i class="ri-compasses-line"></i>Faq</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            </nav>
            <div class="p-5"></div>
        </div>
    </div>

  