// https://nuxt.com/docs/api/configuration/nuxt-config

import tailwindcss from "@tailwindcss/vite";  

export default defineNuxtConfig({
  compatibilityDate: '2024-11-01',
  devtools: { enabled: true },
  css: ['~/assets/css/main.css', 'aos/dist/aos.css'],
  modules: [
    '@pinia/nuxt',
    '@hypernym/nuxt-gsap',
    'nuxt-aos',
  ],

  plugins: ['~/plugins/aos.client.ts', '~/plugins/piniaPersistedState.client.js', '~/plugins/authFetch.js'],

  vite: {
    plugins: [
      tailwindcss(),
    ],
  },

  gsap: {
    composables: true,
    provide: false,
    extraPlugins: {
      scrollTrigger: true,
    },
  },

  runtimeConfig: {
    public: {
      apiBase: 'http://localhost:8000/api'
    }
  }




})