<template>
  <nav>
    <ul>
      <p>
        <router-link to="/two">Go to Home</router-link>
        <router-link to="/one">Go to About</router-link>
      </p>
    </ul>
  </nav>
</template>

<script>
export default {
  name: "todo",
  data() {
    return {
      links: [
        {
          title: 'Home',
          href: '/'
        },
        {
          title: 'About',
          href: '/about'
        }
      ]
    }
  },
}
</script>

<style>

</style>