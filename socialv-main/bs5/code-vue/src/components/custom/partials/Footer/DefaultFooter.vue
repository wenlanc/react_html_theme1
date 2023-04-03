<template>
<footer class="iq-footer bg-white">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-6">
            <ul class="list-inline mb-0">
               <li class="list-inline-item"><router-link :to="{ name: 'social.privacy'}">Privacy Policy</router-link></li>
               <li class="list-inline-item"><router-link :to="{ name: 'social.termofservice'}">Term of Use</router-link></li>
            </ul>
         </div>
         <div class="col-lg-6 d-flex justify-content-end">
            Copyright 2020 <a href="#">SocialV</a> All Rights Reserved.
         </div>
      </div>
   </div>
</footer>
<nav class="iq-float-menu">
   <input type="checkbox" class="iq-float-menu-open" name="menu-open" id="menu-open" />
   <label class="iq-float-menu-open-button" for="menu-open">
      <span class="lines line-1"></span>
      <span class="lines line-2"></span>
      <span class="lines line-3"></span>
   </label>
  <button class="iq-float-menu-item bg-info"   @click="rtlChange(!rtlMode)" title="Direction Mode" data-mode="rtl"><i :class="rtlMode ? 'ri-text-direction-l' : 'ri-text-direction-r'"></i></button>
  <button class="iq-float-menu-item bg-danger" @click="darkChange(!darkMode)" title="Color Mode" id="dark-mode" data-active="true"><i :class="darkMode ? 'ri-moon-clear-line' : 'ri-sun-line'"></i></button>
  <button class="iq-float-menu-item bg-warning" title="Comming Soon"><i class="ri-palette-line"></i></button>
</nav>
</template>
<script>
import darkLoader from '@/assets/images/loader-dark.png'
import loader from '@/assets/images/loader.png'
import { mapGetters, mapActions } from 'vuex'
export default {
  name: 'DefaultFooter',
  data () {
    return {
      rtl: false,
      dark: false
    }
  },
  computed: {
    ...mapGetters({
      darkMode: 'Setting/darkModeState',
      rtlMode: 'Setting/rtlModeState',
      colors: 'Setting/colorState'
    })
  },
  methods: {
    changeColor (code) {
      document.documentElement.style.setProperty('--iq-primary', code.primary)
      document.documentElement.style.setProperty('--iq-primary-light', code.primaryLight)
      document.documentElement.style.setProperty('--iq-primary-dark', code.primaryDark)
    },
    reset () {
      this.changeColor({
        primary: '#827af3',
        primaryLight: '#b47af3',
        bodyBgLight: '#efeefd',
        bodyBgDark: '#1d203f'
      })
      this.themeMode(false)
      this.rtlChange(false)
    },
    rtlChange (mode) {
      this.rtl = mode
      this.modeChange({ rtl: this.rtl, dark: this.dark })
    },
    darkChange (mode) {
      this.dark = mode
      if (mode) {
        this.logo = darkLoader
      } else {
        this.logo = loader
      }
      this.$emit('onLogo', this.logo)
      this.modeChange({ rtl: this.rtl, dark: this.dark })
    },
    ...mapActions({
      modeChange: 'Setting/layoutModeAction'
    })
  }
}
</script>
