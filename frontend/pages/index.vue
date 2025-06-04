<template>
  <div class="flex h-screen w-full flex-col items-center justify-center">
    <div class="absolute top-25 w-60 rounded-lg bg-white px-12 py-3 shadow-lg">
      <img src="@/public/logofaroty.png" alt="logofaroty" class="size-full" />
    </div>
    <form
      action=""
      @submit.prevent="login"
      class="flex h-7/10 w-3/10 flex-col gap-15 rounded-xl border border-gray-300 px-12 pt-20"
    >
      <div class="flex justify-center text-4xl text-[#8352A5]">Acceder a votre compte</div>
      <div class="flex flex-col gap-5 text-xl">
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
      </div>
      <div class="flex flex-col items-center gap-4">
        <button class="rounded-md bg-[#8352A5] px-12 py-2 text-2xl text-white cursor-pointer" >Connexion</button>
        <p v-if="error" class="text-red-500 mt-4">{{ error }}</p>
      </div>
    </form>
  </div>
</template>

<script setup>

const store = useAuthStore();
const countstore = useCounterStore();
const email = ref('');
const password = ref('');
const name_department = ref('');
const error = ref(null);
const router = useRouter();


onMounted(() => {

  useGsap.to(".index-bar", {
      autoAlpha: 1, // Rend visible et ajuste l'opacité
      y: 0, // Remet la carte à sa position normale
      duration: 1, 
      ease: "power2.out"
    }
  );

});
const login = async () => {
    error.value = null
  try {
    const response = await $fetch('http://localhost:8000/api/login', {
      method: 'POST',
      body: {
        email: email.value,
        name_department: name_department.value,
        password: password.value
      }
    })
    // Stocker le token dans le store
    store.setToken(response.access_token)
    store.setUser(response.user)
    // Vous pouvez aussi récupérer et stocker les infos utilisateur via /api/user
    router.push('/dashboard')
    // Changer la connexion dans le store
    countstore.changeconnect()
  } catch (err) {
    error.value = "Erreur lors de la connexion. Veuillez vérifier vos identifiants."
  }
  if (error.value) {
    console.error(error.value);
  }
  if (store.token) {
    console.log("Connexion réussie, token stocké :", store.token);
  } else {
    console.error("Échec de la connexion, aucun token reçu.");
  }

}


</script>
