<template>
  <div class="flex flex-col items-center justify-center">
    <div class="flex w-18/20 flex-col gap-20 py-30">
      <div class="flex flex-col gap-10">
        <MiniTitle message1="Titre" class="title-nos-offres" />
        <p class="info-description opacity-0 -translate-y-10">Besoin d'un developpeur frontend</p>
      </div>
      <div class="flex flex-col gap-10">
        <MiniTitle message1="Contenu" class="title-nos-offres" />
        <p class="w-300 info-description opacity-0 -translate-y-10">
          Dans le cadre de l'évolution de nos projets numériques et de l'optimisation de nos
          interfaces utilisateur, nous rencontrons un besoin croissant en expertise front-end. Afin
          de garantir une expérience fluide et intuitive à nos utilisateurs, il serait pertinent
          d'intégrer un développeur front-end supplémentaire à notre équipe. Ce renfort nous
          permettrait notamment : D'accélérer le développement et la mise en production de nos
          interfaces,D'améliorer la qualité et l’ergonomie de nos produits numériques. Nous serions
          ravis de discuter plus en détail de cette opportunité et d'explorer les meilleures options
          pour répondre à ce besoin stratégique. Dans l’attente de votre retour, je reste à votre
          disposition pour toute information complémentaire.
        </p>
      </div>
      <div class="flex flex-col gap-10">
        <MiniTitle message1="Statut" class="title-nos-offres" />
        <p class="info-description opacity-0 -translate-y-10">En cours</p>
      </div>
      <button class="mt-10 w-40 rounded-sm bg-[#8352A5] px-1 py-1 text-lg text-white info-precedent opacity-0 translate-y-10">
        Precedent
      </button>
    </div>
  </div>
</template>

<script setup>
onMounted(() => {

  useGsap.to(".info-description", {
      autoAlpha: 1, // Rend visible et ajuste l'opacité
      y: 0, // Remet la carte à sa position normale
      delay: 0.5, // Délai de 0.5 seconde avant le début de l'animation
      duration: 1, 
      ease: "power2.out"
    }
  );
  useGsap.to(".info-precedent", {
      autoAlpha: 1, // Rend visible et ajuste l'opacité
      y: 0, // Remet la carte à sa position normale
      delay: 0.9, // Délai de 0.5 seconde avant le début de l'animation
      duration: 1, 
      ease: "power2.out"
    }
  );

});
</script>
