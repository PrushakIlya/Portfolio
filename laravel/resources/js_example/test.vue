<template>
  <todo/>
  <router-view></router-view>
</template>

<script>
import todo from './components/todo.vue'
export default {
  name: "test",
  components:{
    todo
  },

}
</script>

<style>

</style>