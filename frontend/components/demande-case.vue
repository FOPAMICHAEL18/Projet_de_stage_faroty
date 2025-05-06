<template>
  <div class="flex w-230 flex-col gap-8 rounded-2xl border border-[#ccc9c9] px-7 pt-4 pb-4">
    <div class="text-4xl">{{ message1 }}</div>
    <div class="flex justify-between text-xl">
      <p class="text-[#8352A5]">En cours...</p>
      <div class="flex justify-center gap-10">
        <p class="text-red-500">Supprimer</p>
        <p class="text-[#8352A5]">Details</p>
      </div>
    </div>
  </div>
</template>

<script setup>
  const props = defineProps({
    message1: "string",
  });
</script>
