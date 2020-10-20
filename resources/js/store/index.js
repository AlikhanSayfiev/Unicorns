import Vue from 'vue'
import Vuex from 'vuex'
import auth from './modules/auth'
import menu from './modules/menu'
import lang from './modules/lang'
import title from './modules/title'
import format from './modules/format'
import opinion from './modules/opinion'
import partner from './modules/partner'
import project from './modules/project'
import service from './modules/service'
import settings from './modules/settings'
import stat from './modules/stat'
import syndicate from './modules/syndicate'
import follower from './modules/follower'
import blog from './modules/blog'

Vue.use(Vuex)

export default new Vuex.Store({
  modules: {
    auth,
    menu,
    lang,
    title,
    format,
    opinion,
    partner,
    project,
    service,
    settings,
    stat,
    syndicate,
    follower,
    blog
  }
})
