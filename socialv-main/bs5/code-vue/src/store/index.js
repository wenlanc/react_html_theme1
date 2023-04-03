import { createApp } from 'vue'
import Vuex from 'vuex'
import Setting from './Setting/index'
createApp(Vuex)

const debug = process.env.NODE_ENV !== 'production'

export default new Vuex.Store({
  modules: {
    Setting
  },
  state: {
  },
  mutations: {
  },
  actions: {
  },
  getters: {
  },
  strict: debug
})
