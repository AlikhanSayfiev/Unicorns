import axios from 'axios'

export default {
    state: {
      partners: [] 
    },
    mutations: {
        SET_PARTNER (state, partners) {
        state.opinions = partners
      }
    },
    getters: {
        partners (state) {
            return state.partners
        }
    },
    actions: {
        async fetchPartners ({commit}) {
            return await axios.get('partners').then((res) => {
                return commit('SET_OPINION', res.data.data)
            })
        },
        async createPertner ({commit}, form) {
          return await axios.post('partner/create', form, {
            headers: {
              'Content-Type': 'multipart/form-data'
            }
          }).then((res) => {
            return res.data
          })
        },
        async updatePertner ({commit}, form) {
          return await axios.post(`partner/${form.id}/update`, form.data, {
            headers: {
              'Content-Type': 'multipart/form-data'
            }
          }).then((res) => {
            return res.data
          })
        },
        async deletePertner ({commit}, id) {
          return await axios.delete(`partner/${id}/delete`).then((res) => {
            return res.data
          })
        }
    }
  }
  