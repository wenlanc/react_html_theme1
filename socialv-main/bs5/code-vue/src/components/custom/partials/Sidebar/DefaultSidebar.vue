<template>
<div class="iq-sidebar sidebar-default">
    <div id="sidebar-scrollbar">
    <nav class="iq-sidebar-menu">
        <ul id="iq-sidebar-toggle" class="iq-menu">
            <li :class="checkActive('social.list') ? 'active' : ''">
                <router-link :to="{name: 'social.list'}" class=" ">
                    <i class="las la-newspaper"></i><span>Newsfeed</span>
                </router-link>
            </li>
            <li :class="checkActive('social.profilemain') ? 'active' : ''">
                <router-link :to="{name: 'social.profilemain'}" class=" ">
                    <i class="las la-user"></i><span>Profile</span>
                </router-link>
            </li>
            <li :class="checkActive('social.friendlist') ? 'active' : ''">
                <router-link :to="{name: 'social.friendlist'}" class=" ">
                    <i class="las la-user-friends"></i><span>Friend List</span>
                </router-link>
            </li>
             <li :class="checkActive('social.friendprofile') ? 'active' : ''">
                <router-link :to="{name: 'social.friendprofile'}" class=" ">
                    <i class="las la-user-friends"></i><span>Friend Profile</span>
                </router-link>
            </li>
            <li :class="checkActive('social.group') ? 'active' : ''">
                <router-link :to="{name: 'social.group'}" class=" ">
                    <i class="las la-users"></i><span>Group</span>
                </router-link>
            </li>
            <li :class="checkActive('social.profileimage') ? 'active' : ''">
                <router-link :to="{name: 'social.profileimage'}" class=" ">
                    <i class="las la-image"></i><span>Profile Image</span>
                </router-link>
            </li>
            <li :class="checkActive('social.profilevideo') ? 'active' : ''">
                <router-link :to="{name: 'social.profilevideo'}" class=" ">
                    <i class="las la-video"></i><span>Profile Video</span>
                </router-link>
            </li>
            <li :class="checkActive('social.profileevent') ? 'active' : ''">
                <router-link :to="{name: 'social.profileevent'}" class=" ">
                    <i class="las la-film"></i><span>Profile Events</span>
                </router-link>
            </li>
            <li :class="checkActive('social.profilebadges') ? 'active' : ''">
                <router-link :to="{name: 'social.profilebadges'}" class=" ">
                    <i class="las la-certificate"></i><span>Profile Badges</span>
                </router-link>
            </li>
            <li :class="checkActive('social.profileforum') ? 'active' : ''">
                <router-link :to="{name: 'social.profileforum'}" class=" ">
                    <i class="lab la-wpforms"></i><span>Profile Forum</span>
                </router-link>
            </li>
            <li :class="checkActive('social.notification') ? 'active' : ''">
                <router-link :to="{name: 'social.notification'}" class=" ">
                    <i class="las la-bell"></i><span>Notification</span>
                </router-link>
            </li>
            <li :class="checkActive('social.file') ? 'active' : ''">
                <router-link :to="{name: 'social.file'}" class=" ">
                    <i class="las la-file"></i><span>Files</span>
                </router-link>
            </li>
            <li :class="checkActive('social.friendrequest') ? 'active' : ''">
                <router-link :to="{name: 'social.friendrequest'}" class=" ">
                  <i class="las la-anchor"></i><span>Friend Request</span>
                </router-link>
            </li>
            <li :class="checkActive('app.chat') ? 'active' : ''">
                    <router-link :to="{name: 'app.chat'}" class=" ">
                    <i class="lab la-rocketchat"></i><span>Chat</span>
                </router-link>
            </li>
            <li :class="checkActive('app.todo') ? 'active' : ''">
                <router-link :to="{name: 'app.todo'}" class=" ">
                    <i class="las la-check-circle"></i><span>Todo</span>
                </router-link>
            </li>
            <li :class="checkActive('app.calendar') ? 'active' : ''">
                <router-link :to="{name: 'app.calendar'}" class=" ">
                    <i class="las la-calendar"></i><span>Calendar</span>
                </router-link>
            </li>
            <li :class="checkActive('social.birthday') ? 'active' : ''">
                <router-link :to="{name: 'social.birthday'}" class=" ">
                    <i class="las la-birthday-cake"></i><span>Birthday</span>
                </router-link>
            </li>
            <li :class="checkActive('social.weather') ? 'active' : ''">
                <router-link :to="{name: 'social.weather'}" class=" ">
                    <i class="ri-snowy-line"></i><span>Weather</span>
                </router-link>
            </li>
            <li :class="checkActive('social.music') ? 'active' : ''">
                <router-link :to="{name: 'social.music'}" class=" ">
                    <i class="ri-play-circle-line"></i><span>Music</span>
                </router-link>
            </li>
            <li :class="checkActive(markets) ? 'active' : ''">
                <a href="#market" data-bs-toggle="collapse" class="  collapsed" aria-expanded="false">
                    <i class="lab la-blogger"></i><span>MarketPlace</span><i
                        class="ri-arrow-right-s-line iq-arrow-right"></i>
                </a>
                <ul id="market" class="iq-submenu collapse" data-bs-parent="#iq-sidebar-toggle">
                    <li :class="checkActive('social.market1') ? 'active' : ''">
                        <router-link :to="{name: 'social.market1'}"><i class="  ri-grid-line"></i>Market1</router-link>
                    </li>
                    <li :class="checkActive('social.market2') ? 'active' : ''">
                        <router-link :to="{name: 'social.market2'}"><i class="ri-list-check-2"></i>Market2</router-link>
                    </li>
                </ul>
            </li>
            <li :class="checkActive(profiles) ? 'active' : ''">
                <a href="#profile" data-bs-toggle="collapse" class="  collapsed" aria-expanded="false">
                    <i class="lab la-blogger"></i><span>Profiles</span><i
                        class="ri-arrow-right-s-line iq-arrow-right"></i>
                </a>
                <ul id="profile" class="iq-submenu collapse" data-bs-parent="#iq-sidebar-toggle">
                    <li :class="checkActive('social.profile1') ? 'active' : ''">
                        <router-link :to="{name: 'social.profile1'}"><i class="ri-grid-line"></i>Profile1</router-link>
                    </li>
                    <li :class="checkActive('social.profile2') ? 'active' : ''">
                        <router-link :to="{name: 'social.profile2'}"><i class="ri-list-check-2"></i>Profile2</router-link>
                    </li>
                    <li :class="checkActive('social.profile3') ? 'active' : ''">
                        <router-link :to="{name: 'social.profile3'}"><i class="ri-list-check-2"></i>Profile3</router-link>
                    </li>
                </ul>
            </li>
            <li :class="checkActive(blogs) ? 'active' : ''">
                <a href="#blog" data-bs-toggle="collapse" class="  collapsed" aria-expanded="false">
                    <i class="lab la-blogger"></i><span>Blog</span><i
                        class="ri-arrow-right-s-line iq-arrow-right"></i>
                </a>
                <ul id="blog" class="iq-submenu collapse" data-bs-parent="#iq-sidebar-toggle">
                    <li :class="checkActive('blog.blog-grid') ? 'active' : ''">
                        <router-link :to="{name: 'blog.blog-grid'}"><i class="  ri-grid-line"></i>Blog Grid</router-link>
                    </li>
                    <li :class="checkActive('blog.blog-list') ? 'active' : ''">
                        <router-link :to="{name: 'blog.blog-list'}"><i class="ri-list-check-2"></i>Blog List</router-link>
                    </li>
                    <li :class="checkActive('blog.blog-detail') ? 'active' : ''">
                        <router-link :to="{name: 'blog.blog-detail'}"><i class="ri-information-line"></i>Blog Detail</router-link>
                    </li>
                </ul>
            </li>
            <li :class="checkActive(stores) ? 'active' : ''">
                <a href="#store" data-bs-toggle="collapse" class="  collapsed" aria-expanded="false">
                    <i class="las la-store"></i><span>Store</span><i
                        class="ri-arrow-right-s-line iq-arrow-right"></i>
                </a>
                <ul id="store" class="iq-submenu collapse" data-bs-parent="#iq-sidebar-toggle">
                    <li :class="checkActive('store.category-grid') ? 'active' : ''">
                        <router-link :to="{name: 'store.category-grid'}"><i class="  ri-grid-line"></i>Category Grid</router-link>
                    </li>
                    <li :class="checkActive('store.category-list') ? 'active' : ''">
                        <router-link :to="{name: 'store.category-list'}"><i class="ri-list-check-2"></i>Category list</router-link>
                    </li>
                    <li :class="checkActive('store.store-detail') ? 'active' : ''">
                        <router-link :to="{name: 'store.store-detail'}"><i class="ri-information-line"></i>Store Detail</router-link>
                    </li>
                    <li :class="checkActive('store.checkout') ? 'active' : ''">
                        <router-link :to="{name: 'store.checkout'}"><i class="ri-chat-check-line"></i>Checkout</router-link>
                    </li>
                </ul>
            </li>
            <li :class="checkActive(emails) ? 'active' : ''">
                <a href="#mailbox" data-bs-toggle="collapse" class="  collapsed" aria-expanded="false">
                    <i class="ri-mail-line"></i><span>Email</span><i
                        class="ri-arrow-right-s-line iq-arrow-right"></i>
                </a>
                <ul id="mailbox" class="iq-submenu collapse" data-bs-parent="#iq-sidebar-toggle">
                    <li :class="checkActive('app.emaillisting') ? 'active' : ''">
                        <router-link :to="{name: 'app.emaillisting'}"><i class="  ri-inbox-line"></i>Inbox</router-link>
                    </li>
                    <li :class="checkActive('app.composebody') ? 'active' : ''">
                        <router-link :to="{name: 'app.composebody'}"><i class="ri-edit-line"></i>Email Compose</router-link>
                    </li>
                </ul>
            </li>
            <li :class="checkActive(uielement.concat(uikit,forms,formwizard,tables,icons)) ? 'active' : ''">
                <a href="#ui-elements" data-bs-toggle="collapse" class="  collapsed"
                    aria-expanded="false"><i class="ri-focus-2-line"></i><span>Ui-Elements</span><i
                        class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                <ul id="ui-elements" class="iq-submenu collapse"
                data-bs-parent="#iq-sidebar-toggle">
                    <li :class="checkActive(uikit) ? 'active' : ''">
                        <a href="#ui-kit"  data-bs-toggle="collapse" class="  collapsed"
                            aria-expanded="false"><i class="ri-pencil-ruler-line"></i><span>UI Kit</span><i
                                class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="ui-kit" class="iq-submenu collapse" data-bs-parent="#ui-elements">
                            <li :class="checkActive('core.color') ? 'active' : ''">
                                <router-link :to="{name: 'core.color'}"><i class="ri-font-color"></i>colors</router-link>
                            </li>
                            <li :class="checkActive('core.typography') ? 'active' : ''">
                                <router-link :to="{name: 'core.typography'}"><i class="ri-text"></i>Typography</router-link>
                            </li>
                            <li :class="checkActive('core.alert') ? 'active' : ''">
                                <router-link :to="{name: 'core.alert'}"><i class="ri-alert-line"></i>Alerts</router-link>
                            </li>
                            <li :class="checkActive('core.badges') ? 'active' : ''">
                                <router-link :to="{name: 'core.badges'}"><i class="ri-building-3-line"></i>Badges</router-link>
                            </li>
                            <li :class="checkActive('core.breadcrumb') ? 'active' : ''">
                                <router-link :to="{name: 'core.breadcrumb'}"><i class="ri-menu-2-line"></i>Breadcrumb</router-link>
                            </li>
                            <li :class="checkActive('core.button') ? 'active' : ''">
                                <router-link :to="{name: 'core.button'}"><i class="ri-checkbox-blank-line"></i>Buttons</router-link>
                            </li>
                            <li :class="checkActive('core.cards') ? 'active' : ''">
                                <router-link :to="{name: 'core.cards'}"><i class="ri-bank-card-line"></i>Cards</router-link>
                            </li>
                            <li :class="checkActive('core.carousel') ? 'active' : ''">
                                <router-link :to="{name: 'core.carousel'}"><i class="ri-slideshow-line"></i>Carousel</router-link>
                            </li>
                            <li :class="checkActive('core.embed-video') ? 'active' : ''">
                                <router-link :to="{name: 'core.embed-video'}"><i class="ri-slideshow-2-line"></i>Video</router-link>
                            </li>
                            <li :class="checkActive('core.grid') ? 'active' : ''">
                                <router-link :to="{name: 'core.grid'}"><i class="ri-grid-line"></i>Grid</router-link>
                            </li>
                            <li :class="checkActive('core.images') ? 'active' : ''">
                                <router-link :to="{name: 'core.images'}"><i class="ri-image-line"></i>Images</router-link>
                            </li>
                            <li :class="checkActive('core.listgroup') ? 'active' : ''">
                                <router-link :to="{name: 'core.listgroup'}"><i class="ri-file-list-3-line"></i>list
                                    Group</router-link>
                            </li>
                            <li :class="checkActive('core.modal') ? 'active' : ''">
                                <router-link :to="{name: 'core.modal'}"><i class="ri-stop-mini-line"></i>Modal</router-link>
                            </li>
                            <li :class="checkActive('core.notifications') ? 'active' : ''">
                                <router-link :to="{name: 'core.notifications'}"><i class="ri-notification-line"></i>Notifications</router-link>
                            </li>
                            <li :class="checkActive('core.pagination') ? 'active' : ''">
                                <router-link :to="{name: 'core.pagination'}"><i class="ri-pages-line"></i>Pagination</router-link>
                            </li>
                            <li :class="checkActive('core.popovers') ? 'active' : ''">
                                <router-link :to="{name: 'core.popovers'}"><i class="ri-folder-shield-2-line"></i>Popovers</router-link>
                            </li>
                            <li :class="checkActive('core.progressbars') ? 'active' : ''">
                                <router-link :to="{name: 'core.progressbars'}"><i class="ri-battery-low-line"></i>Progressbars</router-link>
                            </li>
                            <li :class="checkActive('core.tabs') ? 'active' : ''">
                                <router-link :to="{name: 'core.tabs'}"><i class="ri-database-line"></i>Tabs</router-link>
                            </li>
                            <li :class="checkActive('core.tooltips') ? 'active' : ''">
                                <router-link :to="{name: 'core.tooltips'}"><i class="ri-record-mail-line"></i>Tooltips</router-link>
                            </li>
                        </ul>
                    </li>
                    <li :class="checkActive(forms) ? 'active' : ''">
                        <a href="#forms" class="  collapsed" data-bs-toggle="collapse"
                            aria-expanded="false"><i class="ri-profile-line"></i><span>Forms</span><i
                                class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="forms" class="iq-submenu collapse" data-bs-parent="#ui-elements">
                            <li :class="checkActive('form.layout') ? 'active' : ''">
                                <router-link :to="{name: 'form.layout'}"><i class="ri-tablet-line"></i>Form Elements</router-link>
                            </li>
                            <li :class="checkActive('form.validate') ? 'active' : ''">
                                <router-link :to="{name: 'form.validate'}"><i class="ri-device-line"></i>Form
                                    Validation</router-link></li>
                            <li :class="checkActive('form.switch') ? 'active' : ''">
                                <router-link :to="{name: 'form.switch'}"><i class="ri-toggle-line"></i>Form Switch</router-link>
                            </li>
                            <li :class="checkActive('form.checkbox') ? 'active' : ''">
                                <router-link :to="{name: 'form.checkbox'}"><i class="ri-checkbox-line"></i>Form
                                    Checkbox</router-link></li>
                            <li :class="checkActive('form.radio') ? 'active' : ''">
                                <router-link :to="{name: 'form.radio'}"><i class="ri-radio-button-line"></i>Form Radio</router-link>
                            </li>
                        </ul>
                    </li>
                    <li :class="checkActive(formwizard) ? 'active' : ''">
                        <a href="#wizard-form" class="  collapsed" data-bs-toggle="collapse"
                            aria-expanded="false"><i class="ri-archive-drawer-line"></i><span>Forms
                                Wizard</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="wizard-form" class="iq-submenu collapse" data-bs-parent="#ui-elements">
                            <li :class="checkActive('form-wizard.simple') ? 'active' : ''">
                                <router-link :to="{name: 'form-wizard.simple'}"><i class="ri-clockwise-line"></i>Simple Wizard</router-link>
                            </li>
                            <li :class="checkActive('form-wizard.validatewizard') ? 'active' : ''">
                                <router-link :to="{name: 'form-wizard.validatewizard'}"><i class="ri-clockwise-2-line"></i>Validate Wizard</router-link>
                            </li>
                            <li :class="checkActive('form-wizard.vertical') ? 'active' : ''">
                                <router-link :to="{name: 'form-wizard.vertical'}"><i class="ri-anticlockwise-line"></i>Vertical Wizard</router-link>
                            </li>
                        </ul>
                    </li>
                    <li :class="checkActive(tables) ? 'active' : ''">
                        <a href="#tables" class="  collapsed" data-bs-toggle="collapse"
                            aria-expanded="false"><i class="ri-table-line"></i><span>Table</span><i
                                class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="tables" class="iq-submenu collapse" data-bs-parent="#ui-elements">
                            <li :class="checkActive('table.basic') ? 'active' : ''">
                                <router-link :to="{name: 'table.basic'}"><i class="ri-table-line"></i>Basic Tables</router-link>
                            </li>
                            <li :class="checkActive('table.datatable') ? 'active' : ''">
                                <router-link :to="{name: 'table.datatable'}"><i class="ri-database-line"></i>Data Table</router-link>
                            </li>
                            <li :class="checkActive('table.editable') ? 'active' : ''">
                                <router-link :to="{name: 'table.editable'}"><i class="ri-refund-line"></i>Editable Table</router-link></li>
                        </ul>
                    </li>
                    <li :class="checkActive(icons) ? 'active' : ''">
                        <a href="#icons" class="  collapsed" data-bs-toggle="collapse"
                            aria-expanded="false"><i class="ri-list-check"></i><span>Icons</span><i
                                class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="icons" class="iq-submenu collapse" data-bs-parent="#ui-elements">
                            <!-- <li :class="checkActive('social.list') ? 'active' : ''">
                                <router-link :to="{name: 'social.list'}"><i class="ri-stack-line"></i>Dripicons</router-link>
                            </li> -->
                            <li :class="checkActive('icon.fontawesome-5') ? 'active' : ''">
                                <router-link :to="{name: 'icon.fontawesome-5'}"><i class="ri-facebook-fill"></i>Font Awesome 5</router-link>
                            </li>
                            <li :class="checkActive('icon.lineawesome') ? 'active' : ''">
                                <router-link :to="{name: 'icon.lineawesome'}"><i class="ri-keynote-line"></i>line Awesome</router-link>
                            </li>
                            <li :class="checkActive('icon.remixicon') ? 'active' : ''">
                                <router-link :to="{name: 'icon.remixicon'}"><i class="ri-remixicon-line"></i>Remixicon</router-link>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li :class="checkActive(pages.concat(auths,extrapages)) ? 'active' : ''">
                <a href="#pages" class="  collapsed" data-bs-toggle="collapse"
                    aria-expanded="false"><i class="ri-pages-line"></i><span>Pages</span><i
                        class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                <ul id="pages" class="iq-submenu collapse" data-bs-parent="#iq-sidebar-toggle">
                    <li :class="checkActive(auths) ? 'active' : ''">
                        <a href="#authentication" class="  collapsed" data-bs-toggle="collapse"
                            aria-expanded="false"><i class="ri-pages-line"></i><span>Authentication</span><i
                                class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="authentication" class="iq-submenu collapse" data-bs-parent="#pages">
                            <li :class="checkActive('auth1.sign-in1') ? 'active' : ''">
                                <router-link :to="{name: 'auth1.sign-in1'}"><i class="ri-login-box-line"></i>Login</router-link>
                            </li>
                            <li :class="checkActive('auth1.sign-up1') ? 'active' : ''">
                                <router-link :to="{name: 'auth1.sign-up1'}"><i class="ri-login-circle-line"></i>Register</router-link>
                            </li>
                            <li :class="checkActive('auth1.recoverpassword1') ? 'active' : ''">
                                <router-link :to="{name: 'auth1.recoverpassword1'}"><i class="ri-record-mail-line"></i>Recover Password</router-link>
                            </li>
                            <li :class="checkActive('auth1.confirmmail1') ? 'active' : ''">
                                <router-link :to="{name: 'auth1.confirmmail1'}"><i class="ri-file-code-line"></i>Confirm Mail</router-link>
                            </li>
                            <li :class="checkActive('auth1.lockscreen1') ? 'active' : ''">
                                <router-link :to="{name: 'auth1.lockscreen1'}"><i class="ri-lock-line"></i>Lock Screen</router-link>
                            </li>
                        </ul>
                    </li>
                    <li :class="checkActive(extrapages) ? 'active' : ''">
                        <a href="#extra-pages" class="  collapsed" data-bs-toggle="collapse"
                            aria-expanded="false"><i class="ri-pantone-line"></i><span>Extra Pages</span><i
                                class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="extra-pages" class="iq-submenu collapse" data-bs-parent="#pages">
                            <li :class="checkActive('extra-pages.timelines') ? 'active' : ''">
                                <router-link :to="{name: 'extra-pages.timelines'}"><i class="ri-map-pin-time-line"></i>Timeline</router-link>
                            </li>
                            <li :class="checkActive('extra-pages.invoice') ? 'active' : ''">
                                <router-link :to="{name: 'extra-pages.invoice'}"><i class="ri-question-answer-line"></i>Invoice</router-link>
                            </li>
                            <li :class="checkActive('extra-pages.blank-page') ? 'active' : ''">
                                <router-link :to="{name: 'extra-pages.blank-page'}"><i class="ri-invision-line"></i>Blank Page</router-link>
                            </li>
                            <li :class="checkActive('default.error404') ? 'active' : ''">
                                <router-link :to="{name: 'default.error404'}"><i class="ri-error-warning-line"></i>Error 404</router-link>
                            </li>
                            <li :class="checkActive('default.error500') ? 'active' : ''">
                                <router-link :to="{name: 'default.error500'}"><i class="ri-error-warning-line"></i>Error 500</router-link>
                            </li>
                            <li :class="checkActive('extra-pages.pricing') ? 'active' : ''">
                                <router-link :to="{name: 'extra-pages.pricing'}"><i class="ri-price-tag-line"></i>Pricing</router-link>
                            </li>
                            <li :class="checkActive('extra-pages.pricing-1') ? 'active' : ''">
                                <router-link :to="{name: 'extra-pages.pricing-1'}"><i class="ri-price-tag-2-line"></i>Pricing 1</router-link>
                            </li>
                            <li :class="checkActive('default.maintenance') ? 'active' : ''">
                                <router-link :to="{name: 'default.maintenance'}"><i class="ri-archive-line"></i>Maintenance</router-link>
                            </li>
                            <li :class="checkActive('default.coming-soon') ? 'active' : ''">
                                <router-link :to="{name: 'default.coming-soon'}"><i class="ri-mastercard-line"></i>Coming Soon</router-link>
                            </li>
                            <li :class="checkActive('extra-pages.faq') ? 'active' : ''">
                                <router-link :to="{name: 'extra-pages.faq'}"><i class="ri-compasses-line"></i>Faq</router-link>
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
</template>
<script>
import Scrollbar from 'smooth-scrollbar'
export default {
  name: 'DefaultSidebar',
  data () {
    return {
      profiles: ['social.profile1', 'social.profile2', 'social.profile3'],
      markets: ['social.market1', 'social.market2'],
      blogs: ['blog.blog-grid', 'blog.blog-list', 'blog.blog-detail'],
      stores: ['store.category-grid', 'store.category-list', 'store.store-detail', 'store.checkout'],
      emails: ['app.emaillisting', 'app.composebody'],
      pages: [],
      auths: ['extra-pages', 'auth1.sign-in1', 'auth1.sign-up1', 'auth1.recoverpassword1', 'auth1.confirmmail1', 'auth1.lockscreen'],
      extrapages: ['extra-pages.timelines', 'extra-pages.invoice', 'extra-pages.blank-page', 'default.error404', 'default.error500', 'extra-pages.pricing', 'extra-pages.pricing-1', 'default.maintenance', 'default.coming-soon', 'extra-pages.faq'],
      uielement: [],
      uikit: ['core.color', 'core.typography', 'core.alert', 'core.badges', 'core.breadcrumb',
        'core.button', 'core.cards', 'core.carousel', 'core.embed-video', 'core.grid', 'core.images',
        'core.listgroup', 'core.modal', 'core.notifications', 'core.pagination', 'core.popovers', 'core.progressbars', 'core.tabs', 'core.tooltips'],
      forms: ['form.layout', 'form.validate', 'form.switch', 'form.checkbox', 'form.radio'],
      formwizard: ['form-wizard.simple', 'form-wizard.validatewizard', 'form-wizard.vertical'],
      tables: ['table.basic', 'table.editable', 'table.datatable'],
      icons: ['icon.fontawesome-5', 'icon.lineawesome', 'icon.remixicon']

    }
  },
  mounted () {
    this.SmoothScrollbar()
    // this.checkProfile2()
  },
  methods: {
    checkActive (route) {
      if (this.$route.name === route) {
        return true
      }
      if (route.includes(this.$route.name)) {
        return true
      }
    },
    SmoothScrollbar () {
      const elementExistMain = document.querySelector('#sidebar-scrollbar')
      if (elementExistMain) {
        Scrollbar.init(document.querySelector('#sidebar-scrollbar'))
      }
      const elementExistRight = document.querySelector('#right-sidebar-scrollbar')
      if (elementExistRight) {
        Scrollbar.init(document.querySelector('#right-sidebar-scrollbar'))
      }
    }
    // checkProfile2 () {
    //   const body = document.querySelector('body')
    //   if (this.checkActive('social.profile2') === 'active') {
    //     body.classList.add('profile-2')
    //   } else {
    //     body.classList.remove('profile-2')
    //   }
    // }
  }
}
</script>
