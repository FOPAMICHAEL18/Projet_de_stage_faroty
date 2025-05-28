<template>
    <div class="flex h-20 items-center justify-between px-25">
        <div class="w-28 header-connection opacity-0 -translate-y-5"><img src="@/public/logofaroty.png" alt="logofaroty" /></div>
    </div>
</template>

<script setup>

onMounted(() => {

  useGsap.to(".header-connection", {
      autoAlpha: 1, // Rend visible et ajuste l'opacité
      y: 0, // Remet la carte à sa position normale
      duration: 1, 
      ease: "power2.out"
    }
  );

});
</script>