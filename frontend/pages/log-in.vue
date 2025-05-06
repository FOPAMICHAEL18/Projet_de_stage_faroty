<template>
  <div class="flex h-screen w-full flex-col items-center justify-center">
    <div class="absolute top-14 w-60 rounded-lg bg-white px-12 py-3 shadow-lg">
      <img src="@/public/logofaroty.png" alt="logofaroty" class="size-full" />
    </div>
    <form
      action=""
      class="flex h-8/10 w-3/10 flex-col gap-15 rounded-xl border border-gray-300 px-12 pt-20"
    >
      <div class="flex justify-center text-4xl text-[#8352A5]">Acceder a votre compte</div>
      <div class="flex flex-col gap-5 text-xl">
        <div class="flex flex-col gap-2">
          <label for="name">Nom</label>
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
      </div>
      <div class="flex flex-col items-center gap-4">
        <button class="rounded-md bg-[#8352A5] px-12 py-2 text-2xl text-white">Connexion</button>
        <p class="text-lg text-[#8352A5]"><NuxtLink to="sign-in">Creer un compte</NuxtLink></p>
      </div>
    </form>
  </div>
</template>
