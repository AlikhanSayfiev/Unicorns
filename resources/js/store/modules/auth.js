import Vue from 'vue'

export default {
    state: {
      token: null,
      user: null
    },
    mutations: {
      SET_TOKEN (state, token) {
        state.token = token
      },
      SET_USER (state, user) {
        state.user = user
      }
    },
    getters: {
      authenticated (state) {
        return state.token && state.user
      },
      user () {
        return Vue.auth.user();
      }
    },
    actions: {
      async login ({ dispatch, commit }, form) {
        return new Promise((resolve, reject) => {
            Vue.auth.login({
                url: 'auth/login',
                body: form.body, // VueResource
                data: form.data, // Axios
                remember: false,
                staySignedIn: form.staySignedIn,
            })
            .then((res) => {
                Vue.router.push({
                    name: 'home'
                });

                resolve(res);
            }, reject);
        });
      },
      async attempt ({ commit, state }, token) {
        commit('SET_TOKEN', token)
  
        if (!state.token) return ''
  
        try {
          const response = await axios.get('user/me')
  
          return commit('SET_USER', response.data.data)
        } catch (e) {
          commit('SET_TOKEN', null)
          commit('SET_USER', null)
        }
      },
      async logout ({ commit }) {
        return await axios.get('auth/logout').then(() => {
          commit('SET_TOKEN', null)
          commit('SET_USER', null)
        })
      }
    }
  }
  