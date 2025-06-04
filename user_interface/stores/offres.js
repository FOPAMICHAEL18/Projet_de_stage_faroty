
export const useOffresStore = defineStore('offres', () => {
  // Etat stockant les items
  const offres = ref([])
  const isLoading = ref(false)
  const error = ref(null)

  // Action pour récupérer les items
  const fetchOffres = async () => {
    // Évitez de refaire l'appel si les données existent déjà.
    if (offres.value.length > 0) return

    isLoading.value = true
    error.value = null

    try {
      // Vous pouvez utiliser le runtimeConfig pour l'URL si besoin :
      // const config = useRuntimeConfig()
      // const apiUrl = `${config.public.apiBase}/items`
      const apiUrl = 'http://localhost:8000/api/index'
      offres.value = await $fetch(apiUrl)
    } catch (err) {
      console.error("Erreur lors de la récupération des items:", err)
    } finally {
      isLoading.value = false
    }
  }

  return { offres, isLoading, error, fetchOffres }
})