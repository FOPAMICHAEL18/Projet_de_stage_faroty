<template>
    <div class="flex flex-col items-center justify-center">
      <div class="flex w-18/20 flex-col gap-15 py-15">
        <div class="flex h-30 w-full items-center justify-center rounded-lg bg-[#8352A5] text-5xl text-white index-bar opacity-0 translate-y-10">
          Bienvenue sur le site carriere de Faroty
        </div>
        <mini-title message1="Rechercher une offre" class="title-rechercher-offre" />
        <form action="" class="flex flex-col gap-8">
          <div class="flex flex-row items-center gap-5">
            <input
              type="text"
              name="search"
              class="h-14 w-11/20 rounded-sm border border-gray-300 p-2 index-search-bar opacity-0 translate-y-10"
            />
            <button type="submit" class="size-14 rounded-sm bg-[#8352A5] p-2 text-white index-search-button opacity-0 translate-y-10">
              <img src="@/public/icons8-search-250 (1).png" alt="search" class="size-full" />
            </button>
          </div>
          <div class="flex flex-row items-center gap-11">
            <select
              class="h-13 w-72 rounded-sm border border-gray-300 p-2 text-gray-300 index-contrat opacity-0 translate-y-10"
              name="contrat"
              id="contrat"
            >
              <option value="">Contrat</option>
              <option value="CDI">CDI</option>
              <option value="CDD">CDD</option>
              <option value="Stage">Stage</option>
            </select>
            <select
              class="h-13 w-72 rounded-sm border border-gray-300 p-2 text-gray-300 index-metier opacity-0 translate-y-10"
              name="metier"
              id="metier"
            >
              <option value="">Metier</option>
              <option value="CDI">CDI</option>
              <option value="CDD">CDD</option>
              <option value="Stage">Stage</option>
            </select>
            <div
              class="flex h-13 w-72 items-center justify-center rounded-sm bg-[#8352A5] text-white index-voir opacity-0 translate-y-10"
            >
              <NuxtLink to="/offres">Voir toutes nos offres</NuxtLink>
            </div>
          </div>
        </form>
        <MiniTitle message1="Nos dernieres offres d'emplois" class="title-derniere-offre" />
        <div class="flex flex-wrap items-center gap-5 index-offre opacity-0 translate-y-10">
          <CubeCase v-for="option in options" :message1="option" />
        </div>
      </div>
    </div>
  </template>
  
  <script setup>
  
    const countstore = useCounterStore();
    const options = [
      "Developpeur Frontend",
      "Développeur Backend",
      "Développeur Fullstack",
      "Développeur Mobile",
      "Développeur Web",
      "Développeur Data",
      "Développeur IA",
    ];

    onMounted(() => {

      useGsap.to(".index-bar", {
          autoAlpha: 1, // Rend visible et ajuste l'opacité
          y: 0, // Remet la carte à sa position normale
          duration: 1, 
          ease: "power2.out"
        }
      );
      useGsap.to(".index-search-bar", {
          autoAlpha: 1, // Rend visible et ajuste l'opacité
          y: 0, // Remet la carte à sa position normale
          duration: 1, 
          ease: "power2.out",
          delay: 0.6 // Délai de 0.5 seconde avant le début de l'animation
        }
      );
      useGsap.to(".index-search-button", {
          autoAlpha: 1, // Rend visible et ajuste l'opacité
          y: 0, // Remet la carte à sa position normale
          duration: 1, 
          ease: "power2.out",
          delay: 0.8 // Délai de 0.5 seconde avant le début de l'animation
        }
      );
      useGsap.to(".index-contrat", {
          autoAlpha: 1, // Rend visible et ajuste l'opacité
          y: 0, // Remet la carte à sa position normale
          duration: 1, 
          ease: "power2.out",
          delay: 1 // Délai de 0.5 seconde avant le début de l'animation
        }
      );
      useGsap.to(".index-metier", {
          autoAlpha: 1, // Rend visible et ajuste l'opacité
          y: 0, // Remet la carte à sa position normale
          duration: 1, 
          ease: "power2.out",
          delay: 1.2 // Délai de 0.5 seconde avant le début de l'animation
        }
      );
      useGsap.to(".index-voir", {
          autoAlpha: 1, // Rend visible et ajuste l'opacité
          y: 0, // Remet la carte à sa position normale
          duration: 1, 
          ease: "power2.out",
          delay: 1.4 // Délai de 0.5 seconde avant le début de l'animation
        }
      );
      useGsap.to(".index-offre", {
          autoAlpha: 1, // Rend visible et ajuste l'opacité
          y: 0, // Remet la carte à sa position normale
          duration: 1, 
          ease: "power2.out",
          delay: 2 // Délai de 0.5 seconde avant le début de l'animation
        }
      );

    });
  </script>
  