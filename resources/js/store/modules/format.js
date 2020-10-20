import axios from 'axios'

export default {
    state: {
      formats: [] 
    },
    mutations: {
        SET_FORMAT (state, formats) {
        state.formats = formats
      }
    },
    getters: {
        formats (state) {
            return state.formats
        }
    },
    actions: {
        async fetchFormats ({commit}) {
            return await axios.get('formats').then((res) => {
                return commit('SET_FORMAT', res.data.data)
            })
        },
        async createFormat ({commit}, form) {
          return await axios.post('format/create', form).then((res) => {
            return res.data
          })
        },
        async updateFormat ({commit}, form) {
          return await axios.post(`format/${form.id}/update`, form.data).then((res) => {
            return res.data
          })
        },
        async deleteFormat ({commit}, id) {
          return await axios.delete(`format/${id}/delete`).then((res) => {
            return res.data
          })
        }
    }
  }
  