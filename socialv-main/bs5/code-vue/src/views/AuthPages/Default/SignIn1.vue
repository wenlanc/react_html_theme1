<template>
  <section class="sign-in-page">
    <div id="container-inside">
      <div id="circle-small"></div>
      <div id="circle-medium"></div>
      <div id="circle-large"></div>
      <div id="circle-xlarge"></div>
      <div id="circle-xxlarge"></div>
    </div>
    <div class="container p-0">
      <div class="row no-gutters">
        <div class="col-md-6 text-center pt-5">
          <div class="sign-in-detail text-white">
            <a class="sign-in-logo mb-5" href="#"><img src="@/assets/images/logo-full.png" class="img-fluid" alt="logo"></a>
            <Swiper :options="options">
              <SwiperSlide  class="item">
                <img src="@/assets/images/login/1.png" class="img-fluid mb-4" alt="logo">
                <h4 class="mb-1 text-white">Manage your orders</h4>
                <p>It is a long established fact that a reader will be distracted by the readable content.</p>
              </SwiperSlide>
              <SwiperSlide class="item">
                <img src="@/assets/images/login/2.png" class="img-fluid mb-4" alt="logo">
                <h4 class="mb-1 text-white">Manage your orders</h4>
                <p>It is a long established fact that a reader will be distracted by the readable content.</p>
              </SwiperSlide>
              <SwiperSlide class="item">
                <img src="@/assets/images/login/3.png" class="img-fluid mb-4" alt="logo">
                <h4 class="mb-1 text-white">Manage your orders</h4>
                <p>It is a long established fact that a reader will be distracted by the readable content.</p>
              </SwiperSlide>
            </Swiper>
          </div>
        </div>
        <div class="col-sm-6 bg-white pt-5">
          <div class="sign-in-from">
            <h1 class="mb-0">Sign in</h1>
            <p>Enter your email address and password to access admin panel.</p>
            <form class="mt-4" @submit.prevent="onSubmit()">
                <div class="form-group">
                    <label class="form-label" for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control mb-0" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label class="form-label" for="exampleInputPassword1">Password</label>
                    <router-link :to="{ name: 'auth1.recoverpassword1'}" class="float-end">Forgot password?</router-link>
                    <input type="password" class="form-control mb-0" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="d-inline-block w-100">
                    <div class="form-check d-inline-block mt-2 pt-1">
                        <input type="checkbox" class="form-check-input" id="customCheck11">
                        <label class="form-check-label" for="customCheck11">Remember Me</label>
                    </div>
                    <button type="submit" class="btn btn-primary float-end">Sign in</button>
                </div>
                <div class="sign-info">
                    <span class="dark-color d-inline-block line-height-2">Don't have an account?<router-link :to="{ name: 'auth1.sign-up1'}"> Sign Up</router-link></span>
                    <ul class="iq-social-media">
                        <li><a href="#"><i class="ri-facebook-box-line"></i></a></li>
                        <li><a href="#"><i class="ri-twitter-line"></i></a></li>
                        <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                    </ul>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import Swiper from '../../../components/custom/slider/Swiper'
import SwiperSlide from '../../../components/custom/slider/SwiperSlide'
export default {
  name: 'SignIn1',
  components: { Swiper, SwiperSlide },
  data () {
    return {
      options: {
        centeredSlides: false,
        loop: false,
        slidesPerView: 1,
        autoplay: {
          delay: 3000
        },
        spaceBetween: 15,
        pagination: {
          el: '.swiper-pagination'
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev'
        },

        // And if we need scrollbar
        scrollbar: {
          el: '.swiper-scrollbar'
        }
      }
    }
  },
  methods: {
    onSubmit () {
      this.$router.push({ name: 'social.list' })
    }
  }
}
</script>
