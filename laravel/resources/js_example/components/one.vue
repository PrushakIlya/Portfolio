<template>

  <h1>One page</h1>
  <ul>
    <li v-for="infos in info">
      {{infos.name}}
    </li>

  </ul>
</template>

<script>
import todo from "./todo";
import axios from "axios";

export default {
  name: "one",
  components: {
    todo
  },
  data() {
    return {
      info: null,
    }
  },
  mounted() {
    axios
        .get('/ilya')
        .then(response => (this.info = response.data))
  }
}
</script>

<style scoped>

</style>