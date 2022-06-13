<template>
  <div id="bind" style="position: fixed;top: 0"></div>
  <div class="popap" id="popap">
    <a href="#bind" class="click"></a>
    <div class="popap__wrapper">
      <div class="popap__header">
        <div>Change name of CATEGORY</div>
        <a href="#bind">X</a>
      </div>
      <div class="popap__main">
        <label for="name">Name: </label>
        <input v-model="name" type="text" name="name">
      </div>
      <div class="popap__footer">
        <a href="#" @click="updateCatalog">Save</a>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props:{
    name:String,
  },
  data() {
    return {
      popapClose: true,
      popapVisible: true,
    }
  },
  methods: {
    closePopap(){
      this.$emit('closePopap');
    },
    updateCatalog(){
      this.$emit('updateCatalog',this.name);
    }
  }
}
</script>

<style lang="sass" scoped>
.popap
  position: fixed
  justify-content: center
  align-items: center
  width: 100%
  height: 100%
  top: 0
  left: 0
  background-color: rgba(0, 0, 0, 0.76)
  opacity: 0
  transition-duration: 1s
  transition-delay: 0s
  transition-timing-function: ease-out
  transition-property: all
  display: flex
  visibility: hidden
  &:target
    opacity: 1
    visibility: visible
  &:target &__wrapper
    transform: perspective(400px) translate(0,0) rotateX(0deg)

  &__wrapper
    width: 500px
    height: 200px
    background-color: white
    padding: 20px
    display: flex
    flex-direction: column
    justify-content: space-between
    z-index: 2
    transform: perspective(400px) translate(0,-100%) rotateX(45deg)
    transition: all 0.5s ease-out 0s

  &__header
    display: flex
    justify-content: space-between

  &__main
    text-align: center
    overflow: hidden
    overflow-x: unset
    overflow-y: scroll

  .click
    width: 100%
    height: 100%
    position: fixed
    top: 0
    left: 0
    z-index: 1

</style>