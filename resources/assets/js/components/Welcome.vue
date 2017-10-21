<template>
  <div id="welcome">
    <v-parallax :src="imgUrl"></v-parallax>
  </div>
</template>
<script>
export default {
  name: "welcome",
  data () {
    return {

    }
  },
  props: ['imgUrl']
}
</script>
<style lang="scss" scoped>
</style>
