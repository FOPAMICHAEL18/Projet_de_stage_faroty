<template>
  <div class="flex flex-col items-center justify-center">
    <div class="flex w-18/20 flex-col gap-15 py-15">
      <mini-title message1="Nos offres d'emplois" />
      <div class="flex flex-wrap items-center gap-5">
        <CubeCase v-for="option in options" :message1="option" />
      </div>
      <div class="mt-10 flex h-20 w-full flex-row items-center justify-between">
        <div class="rounded-sm bg-[#8352A5] px-8 py-3 text-xl text-white">
          <NuxtLink to="/">Retour</NuxtLink>
        </div>
        <div class="rounded-sm bg-[#8352A5] px-5 py-3 text-xl text-white">1</div>
      </div>
    </div>
  </div>
</template>

<script setup>
  const options = [
    "Developpeur Frontend",
    "Développeur Backend",
    "Développeur Fullstack",
    "Développeur Mobile",
    "Développeur Web",
    "Développeur Data",
    "Développeur IA",
  ];
</script>
