import axios from 'axios'

export default {
    state: {
      projects: [] 
    },
    mutations: {
      SET_PROJECT (state, projects) {
        state.projects = projects
      }
    },
    getters: {
        projects (state) {
        return state.projects
      }
    },
    actions: {
        async fetchProjects ({commit}) {
            return await axios.get('projects').then((res) => {
                return commit('SET_PROJECT', res.data.data)
            })
        },
        async createProject ({commit}, form) {
          return await axios.post('project/create', form).then((res) => {
            return res.data
          })
        },
        async updateProject ({commit}, form) {
          return await axios.post(`project/${form.id}/update`, form.data).then((res) => {
            return res.data
          })
        },
        async deleteProject ({commit}, id) {
          return await axios.delete(`project/${id}/delete`).then((res) => {
            return res.data
          })
        }
    }
  }
  