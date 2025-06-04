<template>
    <div class="flex flex-col items-center justify-center">
      <div class="flex w-18/20 flex-col gap-14 py-10">
        <div class="flex h-30 w-full items-center justify-center rounded-lg bg-[#8352A5] text-5xl text-white index-bar opacity-0 translate-y-10">
          Bienvenue sur le site carriere de Faroty
        </div>
        <mini-title message1="Rechercher une offre" class="title-rechercher-offre" />
        <form action="" class="flex flex-col gap-8" @submit.prevent="searchOffres">
          <div class="flex flex-row items-center gap-5">
            <input
              type="text"
              name="search"
              class="h-14 w-11/20 rounded-sm border border-gray-300 p-2 index-search-bar opacity-0 translate-y-10 focus:outline focus:outline-[#8352A5] hover:cursor-pointer"
              v-model="search"
            />
            <button type="submit" class="size-14 rounded-sm bg-[#8352A5] p-2 text-white index-search-button opacity-0 translate-y-10  cursor-pointer">
              <img src="@/public/icons8-search-250 (1).png" alt="search" class="size-full" />
            </button>
          </div>
          <div class="flex flex-row items-center gap-11">
            <select
              class="h-13 w-72 rounded-sm border border-gray-300 p-2 text-gray-300 index-contrat opacity-0 translate-y-10 hover:cursor-pointer"
              name="contrat"
              id="contrat"
              v-model="selectedContrat"
            >
              <option value="">Contrat</option>
              <option value="CDI">CDI</option>
              <option value="CDD">CDD</option>
              <option value="Stage">Stage</option>
            </select>
            <select
              class="h-13 w-72 rounded-sm border border-gray-300 p-2 text-gray-300 index-metier opacity-0 translate-y-10 hover:cursor-pointer"
              name="metier"
              id="metier"
              v-model="selectedMetier"
            >
              <option value="">Metier</option>
              <option value="Informatique">Informatique</option>
              <option value="Comptabiliter">Comptabiliter</option>
              <option value="Marketing">Marketing</option>
              <option value="Communication">Communication</option>
            </select>
            <NuxtLink to="/liste_offres"
              class="flex h-13 w-72 items-center justify-center rounded-sm bg-[#8352A5] text-white index-voir opacity-0 translate-y-10 hover:cursor-pointer"
            >
              Voir toutes nos offres
            </NuxtLink>
          </div>
        </form>
        <MiniTitle message1="Nos dernieres offres d'emplois" class="title-derniere-offre" v-if="!launch" />
        <div class="flex flex-wrap items-center gap-7 index-offre opacity-0 translate-y-10" v-if="!launch">
          <CubeCase v-for="offre in offresStore.offres" :key="offre.id" :id="offre.id" :message1="offre.name_offre" :message2="offre.duree_contrat" :message3="offre.contrat" :message4="offre.metier" />
        </div>
        <MiniTitle message1="Resultat de la recherche" class="title-resultat-recherche" v-if="launch" />
        <p v-if="filteredOffres.length === 0 && launch" class=" flex justify-center items-center text-6xl text-[#8352A5] mt-10"> Aucun resultat trouver </p>
        <div class="flex flex-wrap items-center gap-7 index-offre opacity-0 translate-y-10">
          <CubeCase v-for="filteredOffre in filteredOffres" :key="filteredOffre.id" :id="filteredOffre.id" :message1="filteredOffre.name_offre" :message2="filteredOffre.duree_contrat" :message3="filteredOffre.contrat" :message4="filteredOffre.metier" />
        </div>
      </div>
    </div>
</template>

<script setup>
import { MiniTitle } from '#components';

const countstore = useCounterStore();
const offresStore = useOffresStore();
const search = ref('');
const selectedContrat = ref('')
const selectedMetier = ref('')
const appliedSearch = ref('')
const appliedContrat = ref('')
const appliedMetier = ref('')
const launch = ref(false);


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
      delay: 0.3 // Délai de 0.5 seconde avant le début de l'animation
    }
  );
  useGsap.to(".index-search-button", {
      autoAlpha: 1, // Rend visible et ajuste l'opacité
      y: 0, // Remet la carte à sa position normale
      duration: 1, 
      ease: "power2.out",
      delay: 0.4 // Délai de 0.5 seconde avant le début de l'animation
    }
  );
  useGsap.to(".index-contrat", {
      autoAlpha: 1, // Rend visible et ajuste l'opacité
      y: 0, // Remet la carte à sa position normale
      duration: 1, 
      ease: "power2.out",
      delay: 0.5 // Délai de 0.5 seconde avant le début de l'animation
    }
  );
  useGsap.to(".index-metier", {
      autoAlpha: 1, // Rend visible et ajuste l'opacité
      y: 0, // Remet la carte à sa position normale
      duration: 1, 
      ease: "power2.out",
      delay: 0.6 // Délai de 0.5 seconde avant le début de l'animation
    }
  );
  useGsap.to(".index-voir", {
      autoAlpha: 1, // Rend visible et ajuste l'opacité
      y: 0, // Remet la carte à sa position normale
      duration: 1, 
      ease: "power2.out",
      delay: 0.7 // Délai de 0.5 seconde avant le début de l'animation
    }
  );
  useGsap.to(".index-offre", {
      autoAlpha: 1, // Rend visible et ajuste l'opacité
      y: 0, // Remet la carte à sa position normale
      duration: 1, 
      ease: "power2.out",
      delay: 1 // Délai de 0.5 seconde avant le début de l'animation
    }
  );
  offresStore.fetchOffres();

});
const searchOffres = () => {
  appliedSearch.value = search.value
  appliedContrat.value = selectedContrat.value
  appliedMetier.value = selectedMetier.value
  launch.value = true;

}
const filteredOffres = computed(() => {
  if (!launch.value) return []
  const result = offresStore.offres.filter(offre => { 
    const matchesContrat = appliedContrat.value === "" || offre.contrat.toLowerCase() === appliedContrat.value.toLowerCase();
    const matchesMetier = appliedMetier.value === "" || offre.metier.toLowerCase() === appliedMetier.value.toLowerCase();
    let matchesSearch =false;
    const searchText = appliedSearch.value.trim()
    if (searchText === '') {
      matchesSearch = true
    } else {
      // Découper la chaîne de recherche en mots
      const words = searchText.split(/\s+/)
      // Au moins un mot doit se retrouver dans le titre (insensible à la casse)
      matchesSearch = words.some(word =>
        offre.name_offre.toLowerCase().includes(word.toLowerCase())
      )
    }

    return matchesSearch && matchesContrat && matchesMetier;
  });
  return result;

});




</script>
  