<template>
  <div class="flex w-180 flex-col gap-10 rounded-lg border border-[#ccc9c9] px-7 pt-4 pb-4"> 
    <div>
      <h1 class="text-4xl">{{ message1 }}</h1>
      <p class="text-2xl text-[#ccc9c9]">{{ message2 }}</p>
    </div>
    <div class="flex justify-between text-xl">
      <p class="text-green-500">new</p>
      <p class="text-[#8352A5] cursor-pointer hover:underline">Details</p>
    </div>
  </div>
</template>

<script setup>
  const props = defineProps({
    message1: "string",
    message2: "string",
  });
</script>
