<template>
  <router-view/>
</template>
<script>
export default {
  name: 'App',
  mounted () {
  }
}
</script>

<style lang="scss">
  @import "./assets/scss/socialv.scss";
  @import url("./plugins/icons/remixicon/fonts/remixicon.css");
  @import url("./plugins/icons/line-awesome/dist/line-awesome/css/line-awesome.min.css");
  @import url("./plugins/icons/@fortawesome/fontawesome-free/css/all.min.css");
  @import url("./plugins/Leaflet/leaflet.css");
  @import url("./plugins/fullcalendar/core/main.css");
  @import url("./plugins/fullcalendar/daygrid/main.css");
  @import url("./plugins/fullcalendar/timegrid/main.css");
  @import url("./plugins/fullcalendar/list/main.css");
</style>
