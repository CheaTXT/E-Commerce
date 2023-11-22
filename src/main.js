import './assets/main.css'
import Vue from '/node_modules/.vite/deps/vue.js?v=0fc4fc8b'
import OtherVue from './OtherVue'
import { createApp } from 'vue'
import { createPinia } from 'pinia'

import App from './App.vue'
import router from './router'

const app = createApp(App)

app.use(createPinia())
app.use(router)

app.mount('#app')

import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

new Vue({
  //...
})