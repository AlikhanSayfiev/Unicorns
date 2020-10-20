import bearer from '@websanova/vue-auth/drivers/auth/bearer'
import axios from '@websanova/vue-auth/drivers/http/axios.1.x'
import router from '@websanova/vue-auth/drivers/router/vue-router.2.x'
/**
 * Authentication configuration, some of the options can be override in method calls
 */
const config = {
  auth: bearer,
  http: axios,
  router: router,
  tokenDefaultName: 'access_token',
  tokenStore: ['localStorage'],
  
  parseUserData (data) {
    return data || {}
  },
  // API endpoints used in Vue Auth.
  loginData: {
    url: 'auth/login', 
    method: 'POST', 
    redirect: '', 
    fetchUser: true
  },
  logoutData: {
    url: 'auth/logout', 
    method: 'POST', 
    redirect: '/auth/login', 
    makeRequest: true
  },
  fetchData: {
    url: 'user', 
    method: 'GET', 
    enabled: true
  },
  refreshData: {
    url: 'refresh', 
    method: 'GET', 
    enabled: true, 
    interval: 30
  }
}
export default config