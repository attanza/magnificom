<template>
  <div id="carousel">
    <v-carousel>
      <v-carousel-item v-for="(item,i) in items" v-bind:src="item.src" :key="i"></v-carousel-item>
    </v-carousel>
  </div>
</template>
<script>
export default {
  name: "carousel",
  data: () => ({
    items: [
      {
        src: '/images/invitation/1.jpg'
      },
      {
        src: '/images/invitation/2.jpg'
      },
      {
        src: '/images/invitation/3.jpg'
      },
      {
        src: '/images/invitation/4.jpg'
      },
      {
        src: '/images/invitation/5.jpg'
      },
      {
        src: '/images/invitation/6.jpg'
      },
      {
        src: '/images/invitation/7.jpg'
      }
    ]
  })
}
</script>
<style lang="scss" scoped>
.carousel {
    height: 80vh;
    width: 100%;
}
</style>
