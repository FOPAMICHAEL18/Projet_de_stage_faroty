<template>
  <div class="flex w-full flex-col items-center justify-center">
    <div class="absolute top-0 w-60 rounded-lg bg-white px-12 py-3 shadow-lg">
      <img src="@/public/logofaroty.png" alt="logofaroty" class="size-full" />
    </div>
    <form
      action=""
      class="mt-10 flex h-fit w-3/10 flex-col gap-10 rounded-xl border border-gray-300 px-12 pt-20 pb-4"
    >
      <div class="flex justify-center text-4xl text-[#8352A5]">Creer votre compte</div>
      <div class="flex flex-col gap-4 text-xl">
        <div class="flex flex-col gap-2">
          <label for="name">Nom et Prenoms</label>
          <input
            type="text"
            name="name"
            id="name"
            class="h-14 w-full rounded-sm border border-gray-300 p-2"
          />
        </div>
        <div class="flex flex-col gap-2">
          <label for="email">Email</label>
          <input
            type="email"
            name="email"
            id="email"
            class="h-14 w-full rounded-sm border border-gray-300 p-2"
          />
        </div>
        <div class="flex flex-col gap-2">
          <label for="post">Poste</label>
          <input
            type="text"
            name="post"
            id="post"
            class="h-14 w-full rounded-sm border border-gray-300 p-2"
          />
        </div>
        <div class="flex flex-col gap-2">
          <label for="password">Mot de passe</label>
          <input
            type="password"
            name="password"
            id="password"
            class="h-14 w-full rounded-sm border border-gray-300 p-2"
          />
        </div>
        <div class="flex flex-col gap-2">
          <label for="password">Mot de passe</label>
          <input
            type="password"
            name="password"
            id="password"
            class="h-14 w-full rounded-sm border border-gray-300 p-2"
          />
        </div>
        <div class="flex flex-col gap-2">
          <label for="password">Confirmer votre mot de passe</label>
          <input
            type="password"
            name="password"
            id="password"
            class="h-14 w-full rounded-sm border border-gray-300 p-2"
          />
        </div>
      </div>
      <div class="flex flex-col items-center gap-4">
        <button class="rounded-md bg-[#8352A5] px-12 py-2 text-2xl text-white">
          Creer un compte
        </button>
        <p class="text-lg text-[#8352A5]"><NuxtLink to="log-in">Connecter vous</NuxtLink></p>
      </div>
    </form>
  </div>
</template>

<script setup>
  onMounted(() => {

useGsap.to(".index-bar", {
    autoAlpha: 1, // Rend visible et ajuste l'opacité
    y: 0, // Remet la carte à sa position normale
    duration: 1, 
    ease: "power2.out"
  }
);

});
</script>
