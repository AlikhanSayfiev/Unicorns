import axios from 'axios'

export default {
    state: {
      syndicates: [] 
    },
    mutations: {
      SET_SYN (state, syndicates) {
        state.syndicates = syndicates
      }
    },
    getters: {
        syn (state) {
            return state.syndicates
        }
    },
    actions: {
        async fetchSyn ({commit}) {
            return await axios.get('syndicates').then((res) => {
                return commit('SET_SYN', res.data.data)
            })
        },
        async createSyn ({commit}, form) {
          return await axios.post('syndicate/create', form).then((res) => {
            return res.data
          })
        },
        async updateSyn ({commit}, form) {
          return await axios.post(`syndicate/${form.id}/update`, form.data).then((res) => {
            return res.data
          })
        },
        async deleteSyn ({commit}, id) {
          return await axios.delete(`syndicate/${id}/delete`).then((res) => {
            return res.data
          })
        }
    }
  }
  