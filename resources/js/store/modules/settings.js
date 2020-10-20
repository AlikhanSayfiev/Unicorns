import axios from 'axios'

export default {
    state: {
      settings: [] 
    },
    mutations: {
        SET_SETTING (state, settings) {
        state.settings = settings
      }
    },
    getters: {
        settings (state) {
            return state.settings
        }
    },
    actions: {
        async fetchSettings ({commit}) {
            return await axios.get('settings').then((res) => {
                return commit('SET_SETTING', res.data)
            })
        },
        async updateSettings ({commit}, form) {
          return await axios.post(`settings/${form.id}/update`, form.data, {
            headers: {
              'Content-Type': 'multipart/form-data'
            }
          }).then((res) => {
            return res.data
          })
        }
    }
  }
  