<template>
  <div
    class="flex h-65 w-75 cursor-pointer justify-center rounded-sm border border-gray-300 pt-15 text-2xl text-[#8352A5]"
  >
    {{ message1 }}
  </div>
</template>

<script setup>
  const props = defineProps({
    message1: "string",
  });
</script>
