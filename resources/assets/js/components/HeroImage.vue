<template>
  <div id="hero_image">
    <v-parallax src="/images/invitation/3.jpg">
      <v-layout column align-center justify-center>
        <h1 >Vuetify.js</h1>
        <h4 class="white--text">Build your application today!</h4>
      </v-layout>
    </v-parallax>
  </div>
</template>
<script>
export default {
  name: "hero_image",
  data: () => ({

  }),
  mounted () {
    console.log('hero image');
  }
}
</script>
<style lang="scss" scoped>
</style>
