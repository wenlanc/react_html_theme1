<template>
  <Loader/>
   <router-view></router-view>
</template>
<script>
import Loader from '../components/custom/loader/Loader'
export default {
  name: 'Default',
  components: {
    Loader
  }
}
</script>
