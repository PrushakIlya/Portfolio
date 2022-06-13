import Index from "./components/catalog/Index.vue";
import {createRouter,createWebHistory} from 'vue-router'

export default createRouter({
  history: createWebHistory(),
  routes: [
    { path: '/admin/catalog', component: Index },
  ]
})

