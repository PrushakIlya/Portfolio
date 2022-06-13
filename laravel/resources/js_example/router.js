import {createRouter,createWebHistory,createWebHashHistory,} from 'vue-router'
import todo from './components/todo.vue'
import one from './components/one.vue'
import two from "./components/two";

export default createRouter({
  history: createWebHashHistory(),
  routes: [
    {path:'/two',component: two},
    {path: '/one',component: one}
  ]
})