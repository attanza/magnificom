<template>
  <div id="toTopBtn" v-show="btnShow">
    <a class="button is-float" v-scroll-to="'#home'">
      <span class="icon">
        <i class="fa fa-arrow-up"></i>
      </span>
    </a>
  </div>
</template>

<script>
export default {
  data: () => ({
    btnShow: false,
    scrollCount: 0
  }),
  created () {
    // window.onscroll = this.scrollFunction()
   window.addEventListener('scroll', this.handleScroll);
    this.scrolled = window.scrollY > 0;
  },
  destroyed () {
    window.removeEventListener('scroll', this.handleScroll);
  },
  methods: {
    handleScroll() {
      this.scrollCount = window.scrollY
      if (this.scrollCount > 500) {
          this.btnShow = true
      } else {
          this.btnShow = false
      }
    }
  }
}
</script>

<style lang="css" scoped>
.is-float {
    position: fixed; /* Fixed/sticky position */
    bottom: 20px; /* Place the button at the bottom of the page */
    right: 30px; /* Place the button 30px from the right */
    z-index: 99; /* Make sure it does not overlap */
    border: none; /* Remove borders */
    outline: none; /* Remove outline */
    background-color: rgba(0,0,0,0.1); /* Set a background color */
    color: white; /* Text color */
    cursor: pointer; /* Add a mouse pointer on hover */
    padding: 15px; /* Some padding */
    border-radius: 10px; /* Rounded corners */
}
</style>
