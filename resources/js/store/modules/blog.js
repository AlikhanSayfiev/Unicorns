import axios from 'axios'

export default {
    state: {
      blogs: [] 
    },
    mutations: {
        SET_BLOG (state, blogs) {
        state.blogs = blogs
      }
    },
    getters: {
        blogs (state) {
            return state.blogs
        }
    },
    actions: {
        async fetchBlogs ({commit}) {
            return await axios.get('blogs').then((res) => {
                return commit('SET_BLOG', res.data.data)
            })
        },
        async createBlog ({commit}, form) {
          return await axios.post('blog/create', form, {
            headers: {
              'Content-Type': 'multipart/form-data'
            }
          }).then((res) => {
            return res.data
          })
        },
        async updateBlog ({commit}, form) {
          return await axios.post(`blog/${form.id}/update`, form.data, {
            headers: {
              'Content-Type': 'multipart/form-data'
            }
          }).then((res) => {
            return res.data
          })
        },
        async deleteBlog ({commit}, id) {
          return await axios.delete(`blog/${id}/delete`).then((res) => {
            return res.data
          })
        }
    }
  }
  