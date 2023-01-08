import axios from 'axios'
import VueAxios from 'vue-axios'

export function createAxios(app) {
  
  axios.defaults.baseURL = process.env.API_ENDPOINT;
  
  app.use(VueAxios, axios);
}
