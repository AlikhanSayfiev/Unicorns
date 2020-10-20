  import axios from 'axios'

  export default {
      state: {
        opinions: [] 
      },
      mutations: {
          SET_OPINION (state, opinions) {
          state.opinions = opinions
        }
      },
      getters: {
          opinions (state) {
              return state.opinions
          }
      },
      actions: {
          async fetchOpinions ({commit}) {
              return await axios.get('opinions').then((res) => {
                  return commit('SET_OPINION', res.data.data)
              })
          },
          async createOpinion ({commit}, form) {
            return await axios.post('opinion/create', form, {
              headers: {
                'Content-Type': 'multipart/form-data'
              }
            }).then((res) => {
              return res.data
            })
          },
          async updateOpinion ({commit}, form) {
            return await axios.post(`opinion/${form.id}/update`, form.data, {
              headers: {
                'Content-Type': 'multipart/form-data'
              }
            }).then((res) => {
              return res.data
            })
          },
          async deleteOpinion ({commit}, id) {
            return await axios.delete(`opinion/${id}/delete`).then((res) => {
              return res.data
            })
          }
      }
    }
    