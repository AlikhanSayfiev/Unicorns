import axios from 'axios'

export default {
    state: {
      stats: [] 
    },
    mutations: {
      SET_STAT (state, stats) {
        state.stats = stats
      }
    },
    getters: {
        stats (state) {
        return state.stats
      }
    },
    actions: {
        async fetchStats ({commit}) {
            return await axios.get('statistics').then((res) => {
                return commit('SET_STAT', res.data.data)
            })
        },
        async createStat ({commit}, form) {
          return await axios.post('statistic/create', form).then((res) => {
            return res.data
          })
        },
        async updateStat ({commit}, form) {
          return await axios.post(`statistic/${form.id}/update`, form.data).then((res) => {
            return res.data
          })
        },
        async deleteStat ({commit}, id) {
          return await axios.delete(`statistic/${id}/delete`).then((res) => {
            return res.data
          })
        }
    }
  }
  