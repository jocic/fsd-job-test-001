/**
 * plugins/index.js
 *
 * Automatically included in `./src/main.js`
 */

// Plugins

import { loadFonts } from './webfontloader'
import { createAxios } from './axios'

import vuetify from './vuetify'
import router from '../router'

export function registerPlugins (app) {
  loadFonts()
  createAxios(app)
  app
    .use(vuetify)
    .use(router)
}
