<template>
  <div id="building_map">
    <gmap-map :center="location" :zoom="16" style="width: 100%; height: 50vh;">
      <gmap-marker
        :position="location"
        :clickable="true"
        :draggable="false"
        @click="handleClick"
      ></gmap-marker>
    </gmap-map>
  </div>
</template>
<script>
export default {
  data: () => ({
    location: {
      lat: -6.9559677,
      lng: 107.6642863
    },
    markers: [{
      position: {lat: -6.9559677, lng: 107.6642863}
    }],
    showModal: false
  }),
  methods: {
    handleClick() {
      console.log('click')
    }
  }
}
</script>
