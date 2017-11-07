<template>
  <div id="main_nav">
    <nav class="navbar is-warning">
      <div class="container is-fluid">
        <div class="navbar-brand">
          <div class="navbar-burger burger" data-target="navMenuTransparentExample">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>

        <div id="navMenuTransparentExample" class="navbar-menu">

          <div class="navbar-end">
            <a v-scroll-to="'#home'" class="navbar-item">HOME</a>
            <a v-scroll-to="'#knowledge'" class="navbar-item">KNOWLEDGE</a>
            <a v-scroll-to="'#experience'" class="navbar-item">EXPERIENCE</a>
            <a v-scroll-to="'#work'" class="navbar-item">LATEST WORK</a>
            <a v-scroll-to="'#contact'" class="navbar-item">CONTACT</a>
          </div>
        </div>
      </div>
    </nav>
  </div>
</template>
<script>
export default {
  data () {
    return {

    }
  },
  mounted () {
  }
}
</script>