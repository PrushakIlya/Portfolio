import {createApp} from 'vue'
import test from './test.vue'
import {createRouter,createWebHashHistory} from 'vue-router'

import one from './components/one.vue'
import two from "./components/two";

const a =  createRouter({
  history: createWebHashHistory(),
  routes: [
    {path:'/two',component: two},
    {path: '/one',component: one}
  ]
})

const app = createApp(test)
app.use(a)
app.mount('#app')



