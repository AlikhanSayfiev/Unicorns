import axios from 'axios'

export default {
    state: {
      titles: [] 
    },
    mutations: {
      SET_TITLE (state, titles) {
        state.titles = titles
      }
    },
    getters: {
      titles (state) {
        return state.titles
      }
    },
    actions: {
        async fetchTitles ({commit}) {
            return await axios.get('titles').then((res) => {
                return commit('SET_TITLE', res.data.data)
            })
        },
        async createTitle ({commit}, form) {
          return await axios.post('title/create', form).then((res) => {
            return res.data
          })
        },
        async updateTitle ({commit}, form) {
          return await axios.post(`title/${form.id}/update`, form.data).then((res) => {
            return res.data
          })
        },
        async deleteTitle ({commit}, id) {
          return await axios.delete(`title/${id}/delete`).then((res) => {
            return res.data
          })
        }
    }
  }
  