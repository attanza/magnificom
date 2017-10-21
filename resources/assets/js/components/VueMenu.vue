<template>
  <div id="vue_menu">
    <nav class="navbar fixed-top" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        <button class="button navbar-burger" :class="{'is-active': navbarActive}" @click="navbarActive = !navbarActive">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
      <div class="navbar-menu" :class="{'is-active': navbarActive}" @click="navbarActive = !navbarActive">
        <div class="container">
          <div class="navbar-start">
            <!-- navbar items -->
          </div>

          <div class="navbar-end">
            <a v-scroll-to="'#home'" class="navbar-item">Home</a>
            <a v-scroll-to="'#detail'" class="navbar-item">Details</a>
            <a v-scroll-to="'#map'" class="navbar-item">Location</a>
            <a v-scroll-to="'#photos'" class="navbar-item">Photo's</a>
          </div>
        </div>
      </div>
    </nav>
  </div>
</template>
<script>
export default {
  name: "vue_menu",
  data: () => ({
    navbarActive: false,
    navbarActive: false
  }),
  methods: {
    navbarClick() {
      console.log('clicked')
    }
  }
}
</script>
<style scoped>
.navbar-end a {
  font-size: 1.5em;
}
.navbar-end a:hover {
  text-decoration: none;
}
.navbar-menu > .is-active {
    background-color: rgba(255, 255, 255, 0.5);
}
</style>
