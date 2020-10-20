import axios from 'axios'

export default {
    state: {
      menus: [] 
    },
    mutations: {
      SET_MENU (state, menus) {
        state.menus = menus
      }
    },
    getters: {
      menus (state) {
        return state.menus
      }
    },
    actions: {
        async fetchMenus ({commit}) {
            return await axios.get('menus').then((res) => {
                return commit('SET_MENU', res.data.data)
            })
        },
        async createMenu ({commit}, form) {
          return await axios.post('menu/create', form).then((res) => {
            return res.data
          })
        },
        async updateMenu ({commit}, form) {
          return await axios.post(`menu/${form.id}/update`, form.data).then((res) => {
            return res.data
          })
        },
        async deleteMenu ({commit}, id) {
          return await axios.delete(`menu/${id}/delete`).then((res) => {
            return res.data
          })
        }
    }
  }
  