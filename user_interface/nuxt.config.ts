// https://nuxt.com/docs/api/configuration/nuxt-config
import tailwindcss from "@tailwindcss/vite";
export default defineNuxtConfig({
  compatibilityDate: '2025-05-15',
  devtools: { enabled: true },
  css: ['~/assets/css/main.css'],
  modules: ['@pinia/nuxt', '@hypernym/nuxt-gsap', 'nuxt-aos'],

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

  plugins: ['~/plugins/aos.client.ts'],

  runtimeConfig: {
    public: {
      apiBase: process.env.API_BASE || 'http://localhost:8000/api'
    }
  }

})