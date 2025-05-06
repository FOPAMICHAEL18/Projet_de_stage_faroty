<template>
  <div class="flex flex-row items-center gap-10">
    <div class="h-15 w-2 rounded-xs bg-[#8352A5]"></div>
    <div class="text-4xl text-[#8352A5]">{{ message1 }}</div>
  </div>
</template>

<script setup>
  const props = defineProps({
    message1: "string",
  });
</script>
