export const useAuthStore = defineStore('auth', () => {
  // Déclaration de l'état réactif
  const token = ref(null)
  const user = ref(null)

  // Méthode pour définir le token d'authentification
  function setToken(newToken) {
    token.value = newToken
  }

  // Méthode pour enregistrer les infos utilisateur
  function setUser(newUser) {
    user.value = newUser
  }

  // Méthode pour déconnecter l'utilisateur (vider l'état)
  function logout() {
    token.value = null
    user.value = null
  }
  return { token, user, setToken, setUser, logout }
},
// {
//     persist: {
//     enabled: true,
//     strategies: [
//       {
//         key: 'auth', // Clé de stockage dans le localStorage
//         // Utiliser localStorage uniquement si celui-ci est défini (côté client)
//         storage: typeof window !== 'undefined' ? localStorage : undefined,
//         // Spécifiez les parties du store à persister
//         paths: ['token', 'user']
//       }
//     ]
//     }



// }
)
