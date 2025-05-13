<template>
  <div>
    <div id="overlay" class="fixed inset-0 bg-black opacity-50" v-if="visible"></div>
    <Header />
    <NuxtPage />
  </div>
</template>

<script setup>
const countstore = useCounterStore();
const visible = computed(() => countstore.visible);
</script>