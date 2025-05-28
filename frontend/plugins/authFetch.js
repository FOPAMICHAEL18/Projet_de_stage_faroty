export default defineNuxtPlugin(() => {
  const store = useAuthStore()
  return {
    provide: {
      authFetch: async (url, options = {}) => {
        options.headers = {
          ...options.headers,
          Authorization: store.token ? `Bearer ${store.token}` : ''
        }
        return await $fetch(url, options)
      }
    }
  }
})
import { useAuthStore } from '~/stores/auth'
import { $fetch } from 'ofetch'