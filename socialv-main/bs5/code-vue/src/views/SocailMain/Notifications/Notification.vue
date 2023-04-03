<template>
  <div class="row">
    <div class="col-sm-12">
      <h4 class="card-title">Notification</h4>
    </div>
    <div class="col-sm-12" v-for="(data,index) in notificationData" :key="index">
      <iq-card>
        <template v-slot:body>
            <ul class="notification-list m-0 p-0">
              <li class="d-flex align-items-center justify-content-between">
                  <div class="user-img img-fluid"><img :src="data.img" alt="story-img" class="rounded-circle avatar-40"></div>
                  <div class="w-100">
                    <div class="d-flex justify-content-between">
                        <div class=" ms-3">
                          <h6>{{data.heading}}</h6>
                          <p class="mb-0">{{data.time}}</p>
                        </div>
                        <div class="d-flex align-items-center">
                          <a href="javascript:void();" :class="data.iconbg"><i :class="data.icon"></i></a>
                          <div class="card-header-toolbar d-flex align-items-center">
                              <div class="dropdown">
                                <span class="dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ri-more-fill h4"></i>
                                </span>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#" v-for="(data,index) in action" :key="index">
                                      <i :class="data.icon"></i>{{data.title}}</a>
                                </div>
                              </div>
                          </div>
                        </div>
                    </div>
                  </div>
              </li>
            </ul>
        </template>
      </iq-card>
    </div>
  </div>
</template>
<script>
// import { socialvue } from '../../../config/pluginInit'

export default {
  name: 'Notification',
  mounted () {
    // socialvue.index()
  },
  data () {
    return {
      seen: true,
      notificationData: [
        {
          img: require('../../../assets/images/user/01.jpg'),
          heading: 'Paige Turner Posted in UI/UX Community',
          time: '30  ago',
          icon: 'ri-award-line',
          iconbg: 'me-3 iq-notify bg-soft-primary rounded'
        },
        {
          img: require('../../../assets/images/user/02.jpg'),
          heading: 'Anne Fibbiyon Like Your Post',
          time: '14  ago',
          icon: 'ri-heart-line',
          iconbg: 'me-3 iq-notify bg-soft-danger rounded'
        },
        {
          img: require('../../../assets/images/user/03.jpg'),
          heading: 'Barry Cuda add Story',
          time: '40  ago',
          icon: 'ri-chat-4-line',
          iconbg: 'me-3 iq-notify bg-soft-success rounded'
        },
        {
          img: require('../../../assets/images/user/04.jpg'),
          heading: 'Cliff Hanger posted a comment on your status update',
          time: '42  ago',
          icon: 'ri-more-fill',
          iconbg: 'me-3 iq-notify bg-soft-primary rounded'
        },
        {
          img: require('../../../assets/images/user/05.jpg'),
          heading: 'Rick O\'Shea posted a comment on your photo',
          time: '50  ago',
          icon: 'ri-chat-4-line',
          iconbg: 'me-3 iq-notify bg-soft-success rounded'
        },
        {
          img: require('../../../assets/images/user/06.jpg'),
          heading: 'Brock Lee Sent a Friend Request',
          time: '1 hour ago',
          icon: 'ri-reply-line',
          iconbg: 'me-3 iq-notify bg-soft-warning rounded'
        },
        {
          img: require('../../../assets/images/user/07.jpg'),
          heading: 'Ira Membrit shared your status update',
          time: '30  ago',
          icon: 'ri-share-line',
          iconbg: 'me-3 iq-notify bg-soft-info rounded'
        },
        {
          img: require('../../../assets/images/user/08.jpg'),
          heading: 'Paul Molive and 3 ther have Birthday Today',
          time: '1 day  ago',
          icon: 'las la-birthday-cake',
          iconbg: 'me-3 iq-notify bg-soft-danger rounded'
        },
        {
          img: require('../../../assets/images/user/09.jpg'),
          heading: 'Petey Cruiser Sent a Friend request',
          time: '1 week  ago',
          icon: 'ri-reply-line',
          iconbg: 'me-3 iq-notify bg-soft-warning rounded'
        },
        {
          img: require('../../../assets/images/user/10.jpg'),
          heading: 'Bob Frapples and 45 other Like Your Pst on timeline',
          time: '30  ago',
          icon: 'ri-heart-line',
          iconbg: 'me-3 iq-notify bg-soft-danger rounded'
        },
        {
          img: require('../../../assets/images/user/11.jpg'),
          heading: 'Maya Didas share Your Post',
          time: '1 month  ago',
          icon: 'ri-award-line',
          iconbg: 'me-3 iq-notify bg-soft-info rounded'
        },
        {
          img: require('../../../assets/images/user/12.jpg'),
          heading: 'Sal Monella Add Photo with You',
          time: '30  ago',
          icon: 'ri-more-fill',
          iconbg: 'me-3 iq-notify bg-soft-primary rounded'
        },
        {
          img: require('../../../assets/images/user/01.jpg'),
          heading: 'Barb Dwyer commented on your new profile status',
          time: '2 month  ago',
          icon: 'ri-chat-4-line',
          iconbg: 'me-3 iq-notify bg-soft-success rounded'
        },
        {
          img: require('../../../assets/images/user/13.jpg'),
          heading: 'Terry Aki commented on your new profile status',
          time: '3 month  ago',
          icon: 'ri-chat-4-line',
          iconbg: 'me-3 iq-notify bg-soft-success rounded'
        }
      ],
      action: [
        {
          icon: 'ri-eye-fill me-2',
          title: 'View'
        },
        {
          icon: 'ri-delete-bin-6-fill me-2',
          title: 'Delete'
        },
        {
          icon: 'ri-pencil-fill me-2',
          title: 'Edit'
        },
        {
          icon: 'ri-printer-fill me-2',
          title: 'Print'
        },
        {
          icon: 'ri-file-download-fill me-2',
          title: 'Download'
        }
      ]
    }
  }
}
</script>
