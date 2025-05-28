<template>
  <div class="flex w-full flex-col items-center justify-center">
    <div class="absolute top-0 w-60 rounded-lg bg-white px-12 py-3 shadow-lg">
      <img src="@/public/logofaroty.png" alt="logofaroty" class="size-full" />
    </div>
    <form
      action=""
      class="mt-10 flex h-fit w-3/10 flex-col gap-10 rounded-xl border border-gray-300 px-12 pt-20 pb-4"
      @submit.prevent="register"
    >
      <div class="flex justify-center text-4xl text-[#8352A5]">Creer votre compte</div>
      <div class="flex flex-col gap-4 text-xl">
        <div class="flex flex-col gap-2">
          <label for="name" class="w-fit">Nom et Prenoms</label>
          <input
            type="text"
            name="name"
            id="name"
            class="h-14 w-full rounded-sm border border-gray-300 p-2 focus:outline focus:outline-[#8352A5] hover:outline-[#8352A5] hover:outline cursor-pointer"
            v-model="name"
          />
        </div>
        <div class="flex flex-col gap-2">
          <label for="email" class="w-fit">Email</label>
          <input
            type="email"
            name="email"
            id="email"
            class="h-14 w-full rounded-sm border border-gray-300 p-2 focus:outline focus:outline-[#8352A5] hover:outline-[#8352A5] hover:outline cursor-pointer"
            v-model="email"
          />
        </div>
        <div class="flex flex-col gap-2">
          <label for="post" class="w-fit">Poste</label>
          <input
            type="text"
            name="post"
            id="post"
            class="h-14 w-full rounded-sm border border-gray-300 p-2 focus:outline focus:outline-[#8352A5] hover:outline-[#8352A5] hover:outline cursor-pointer"
            v-model="name_department"
          />
        </div>
        <div class="flex flex-col gap-2">
          <label for="password" class="w-fit">Mot de passe</label>
          <input
            type="password"
            name="password"
            id="password"
            class="h-14 w-full rounded-sm border border-gray-300 p-2 focus:outline focus:outline-[#8352A5] hover:outline-[#8352A5] hover:outline cursor-pointer"
            v-model="password"
          />
        </div>
        <div class="flex flex-col gap-2">
          <label for="password" class="w-fit">Confirmer votre mot de passe</label>
          <input
            type="password"
            name="password"
            id="password"
            class="h-14 w-full rounded-sm border border-gray-300 p-2 focus:outline focus:outline-[#8352A5] hover:outline-[#8352A5] hover:outline cursor-pointer"
            v-model="password_confirmation"
          />
        </div>
      </div>
      <div class="flex flex-col items-center gap-4">
        <button class="rounded-md bg-[#8352A5] px-12 py-2 text-2xl text-white cursor-pointer" type="submit" >
          Creer un compte
        </button>
        <p class="text-lg text-[#8352A5]"><NuxtLink to="log-in">Connectez vous</NuxtLink></p>
      </div>
    </form>
  </div>
</template>

<script setup>

const name = ref('');
const email = ref('');
const name_department = ref('');
const password = ref('');
const password_confirmation = ref('')
const error = ref(null);
const router = useRouter();
const authStore = useAuthStore();


onMounted(() => {

  useGsap.to(".index-bar", {
      autoAlpha: 1, // Rend visible et ajuste l'opacité
      y: 0, // Remet la carte à sa position normale
      duration: 1, 
      ease: "power2.out"
    }
  );

});

const register = async () => {
  error.value = null
  try {
    const response = await $fetch('http://localhost:8000/api/register', {
      method: 'POST',
      body: {
        name: name.value,
        email: email.value,
        name_department: name_department.value,
        password: password.value,
        password_confirmation: password_confirmation.value
      }
    })
    // Stocker le token renvoyé par l'API dans le store
    authStore.setToken(response.access_token)
    // Optionnellement, vous pouvez récupérer et stocker les informations utilisateur via /api/user
    router.push('/') // Rediriger l'utilisateur vers la page d'accueil
  } catch (err) {
    // Affichez l'erreur retournée par l'API
    error.value =
      err.data?.message || "Erreur lors de l'inscription – veuillez vérifier les informations saisies."
  }
  if (error.value) {
    console.error(error.value);
  }
  if (authStore.token) {
    console.log("Inscription réussie, token stocké :", authStore.token);
  } else {
    console.error("Échec de l'inscription, aucun token reçu.");
  }

}  

</script>
