import axios from 'axios'

export default {
    state: {
      lang: [] 
    },
    mutations: {
      SET_LANGUAGES (state, lang) {
        state.lang = lang
      }
    },
    getters: {
      languages (state) {
        return state.lang
      }
    },
    actions: {
        async fetchLanguages ({commit}) {
            return axios.get('languages').then((res) => {
                return commit('SET_LANGUAGES', res.data)
            })
        }
    }
  }
  