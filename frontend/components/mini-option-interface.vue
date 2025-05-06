<template>
  <div class="flex flex-col gap-4">
    <div class="border-b py-2 text-4xl">
      <h1>{{ message1 }}</h1>
    </div>
    <div>{{ message2 }}</div>
    <button class="w-50 rounded-sm bg-[#8352A5] px-2 py-1 text-lg text-white">
      {{ message3 }}
    </button>
  </div>
</template>

<script setup>
  const props = defineProps({
    message1: "string",
    message2: "string",
    message3: "string",
  });
</script>
