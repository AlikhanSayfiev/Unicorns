import axios from 'axios'

export default {
    state: {
      services: [] 
    },
    mutations: {
        SET_SERVICE (state, services) {
        state.services = services
      }
    },
    getters: {
        services (state) {
            return state.services
        }
    },
    actions: {
        async fetchServices ({commit}) {
            return await axios.get('services').then((res) => {
                return commit('SET_SERVICE', res.data.data)
            })
        },
        async createService ({commit}, form) {
          return await axios.post('service/create', form, {
            headers: {
              'Content-Type': 'multipart/form-data'
            }
          }).then((res) => {
            return res.data
          })
        },
        async updateService ({commit}, form) {
          return await axios.post(`service/${form.id}/update`, form.data, {
            headers: {
              'Content-Type': 'multipart/form-data'
            }
          }).then((res) => {
            return res.data
          })
        },
        async deleteService ({commit}, id) {
          return await axios.delete(`service/${id}/delete`).then((res) => {
            return res.data
          })
        }
    }
  }
  