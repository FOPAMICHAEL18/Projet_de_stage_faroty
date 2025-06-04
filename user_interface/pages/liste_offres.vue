<template>
  <div class="flex flex-col items-center justify-center">
    <div class="flex w-18/20 flex-col gap-1 py-15">
      <div class="flex flex-col gap-15 h-180">
        <MiniTitle message1="Nos offres d'emplois" class="title-nos-offres" />
        <div class="flex flex-wrap items-center gap-5 offres-offres opacity-0 translate-y-10">
          <CubeCase v-for="offre in offresStore.offres" :key="offre.id" :id="offre.id" :message1="offre.name_offre" :message2="offre.duree_contrat" :message3="offre.contrat" />
        </div>
      </div>
      <div class="mt-10 flex h-20 w-full flex-row items-center justify-between">
        <NuxtLink to="/" class="rounded-sm bg-[#8352A5] px-8 py-3 text-xl text-white offres-retour opacity-0 -translate-x-10">
          Retour
        </NuxtLink>
        <div class="rounded-sm bg-[#8352A5] px-5 py-3 text-xl text-white offres-number opacity-0 translate-x-10 ">1</div>
      </div>
    </div>
  </div>
</template>

<script setup>
const offresStore = useOffresStore()


onMounted(() => {

  useGsap.to(".offres-offres", {
      autoAlpha: 1, // Rend visible et ajuste l'opacité
      y: 0, // Remet la carte à sa position normale
      duration: 1, 
      ease: "power2.out",
      delay: 0.5 // Délai de 0.5 seconde avant le début de l'animation
    }
  );
  useGsap.to(".offres-retour", {
      autoAlpha: 1, // Rend visible et ajuste l'opacité
      x: 0, // Remet la carte à sa position normale
      duration: 1, 
      ease: "power2.out",
      delay: 1 // Délai de 0.5 seconde avant le début de l'animation
    }
  );
  useGsap.to(".offres-number", {
      autoAlpha: 1, // Rend visible et ajuste l'opacité
      x: 0, // Remet la carte à sa position normale
      duration: 1, 
      ease: "power2.out",
      delay: 1 // Délai de 0.5 seconde avant le début de l'animation
    }
  );
  offresStore.fetchOffres();

});

</script>
