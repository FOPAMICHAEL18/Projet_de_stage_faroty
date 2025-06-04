<template>
  <NuxtLink
  :to="`/offre/${props.id}`"
    class="flex flex-col h-65 w-75 cursor-pointer rounded-sm border border-gray-300 px-5 py-10 gap-4 hover:scale-105 hover:duration-200 hover:border-[#8352A5] hover:shadow-lg transition-all duration-200 ease-in-out  "
  >
    <h1 class="text-2xl text-[#8352A5]">{{ message1 }}</h1>
    <div class="flex flex-col text-gray-300">
      <p> <span class="font-semibold">Duree :</span> {{ message2 }}</p>
      <p> <span class="font-semibold">Contrat :</span> {{ message3 }}</p>
      <p> <span class="font-semibold">Metier :</span> {{ message4 }}</p>
    </div>
  </NuxtLink>
</template>

<script setup>
  const props = defineProps({
    message1: "string",
    message2: "string",
    message3: "string",
    message4: "string",
    id: "string",
  });


</script>
