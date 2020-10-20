import axios from 'axios'

export default {
    state: {
      followers: [] 
    },
    mutations: {
        SET_FOLLOWER (state, followers) {
        state.followers = followers
      }
    },
    getters: {
        followers (state) {
            return state.followers
        }
    },
    actions: {
        async fetchFollowers ({commit}) {
            return await axios.get('followers').then((res) => {
                return commit('SET_FOLLOWER', res.data)
            })
        },
        async createFollower ({commit}, form) {
          return await axios.post('follower/create', form, {
            headers: {
              'Content-Type': 'multipart/form-data'
            }
          }).then((res) => {
            return res.data
          })
        },
        async updateFollower ({commit}, form) {
          return await axios.post(`follower/${form.id}/update`, form.data, {
            headers: {
              'Content-Type': 'multipart/form-data'
            }
          }).then((res) => {
            return res.data
          })
        },
        async deleteFollower ({commit}, id) {
          return await axios.delete(`follower/${id}/delete`).then((res) => {
            return res.data
          })
        }
    }
  }
