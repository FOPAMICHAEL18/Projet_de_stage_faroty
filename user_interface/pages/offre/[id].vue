<template>
  <div class="flex flex-col items-center justify-center">
    <div class="flex w-18/20 flex-col gap-15 py-15">
      <div
        class="flex h-30 w-full flex-row items-center justify-between rounded-lg bg-[#8352A5] px-20 offre-bar opacity-0 translate-y-20"
      >
        <h1 class="text-5xl text-white">{{ offre.name_offre }}</h1>
        <NuxtLink
          :to="`/candidature/${offreId}`"
          class="flex w-50 flex-row items-center justify-center rounded-sm bg-[#F9EDEF] px-2 py-2 text-lg cursor-pointer"
        >
          Je veux postuler
        </NuxtLink>
      </div>
      <div class="flex flex-row justify-between gap-65">
        <div class="flex w-4/10 flex-col gap-25">
          <div class="flex flex-col gap-8">
            <MiniTitle message1="Description du poste" class="title-offre" />
            <div class="text-2xl description-poste opacity-0 translate-y-20">
              <h1 class="font-semibold">Metier</h1>
              <p>{{ offre.metier }}</p>
            </div>
            <div class="text-2xl description-poste opacity-0 translate-y-20">
              <h1 class="font-semibold">Contrat</h1>
              <p>{{ offre.contrat }}</p>
            </div>
            <div class="text-2xl description-poste opacity-0 translate-y-20">
              <h1 class="font-semibold">Description de la mission</h1>
              <p>
                {{ offre.description }}
              </p>
            </div>
            <div class="text-2xl description-poste opacity-0 translate-y-20">
              <h1 class="font-semibold">Profil</h1>
              <p>
                {{ offre.profil }}
              </p>
            </div>
          </div>
          <div class="flex flex-col gap-8">
            <MiniTitle message1="Localisation du poste" class="title-offre" />
            <div class="text-2xl">
              <h1 class="font-semibold description-poste opacity-0 translate-y-20">Localisation du poste</h1>
              <p>{{ offre.localisation }}</p>
            </div>
            <div class="text-2xl">
              <h1 class="font-semibold description-poste opacity-0 translate-y-20">Duree du contrat en mois</h1>
              <p>{{ offre.duree_contrat }}</p>
            </div>
          </div>
          <div class="flex flex-col gap-8">
            <MiniTitle message1="Critere du poste" class="title-offre" />
            <div class="text-2xl">
              <h1 class="font-semibold description-poste opacity-0 translate-y-20">Niveau d'etude min.requis</h1>
              <p>{{ offre.niveau_etude }}</p>
            </div>
            <div class="text-2xl">
              <h1 class="font-semibold description-poste opacity-0 translate-y-20">Niveau d'experience min.requis</h1>
              <p>{{ offre.niveau_experience }}</p>
            </div>
            <div class="text-2xl">
              <h1 class="font-semibold description-poste opacity-0 translate-y-20">Langues</h1>
              <p>{{ offre.language }}</p>
            </div>
          </div>
          <div @click="goBack" class="mt-10 w-40 rounded-sm bg-[#8352A5] px-1 py-2 text-center text-xl text-white description-poste opacity-0 translate-y-20 cursor-pointer">
            Precedent
          </div>
        </div>
        <div class="flex w-5/10 flex-col gap-15">
          <p
            class="text-5xl text-[#8352A5] after:mt-4 after:ml-1 after:block after:h-2 after:w-170 after:rounded-xs after:bg-[#8352A5] offre-interesser opacity-0 -translate-x-50"
          >
            Ces offres pourraient vous interesser
          </p>
          <div class="flex flex-wrap items-center gap-10 description-poste opacity-0 translate-y-20">
            <CubeCase v-for="otherOffre in otherOffres" :key="otherOffre.id" :id="otherOffre.id" :message1="otherOffre.name_offre" :message2="otherOffre.duree_contrat" :message3="otherOffre.contrat" /> 
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
  const countstore = useCounterStore();
  const router = useRouter()
  const route = useRoute()
  const offreId = route.params.id
  const offresStore = useOffresStore();

onMounted(() => {

  useGsap.to(".offre-bar", {
      autoAlpha: 1, // Rend visible et ajuste l'opacité
      y: 0, // Remet la carte à sa position normale
      duration: 1, 
      ease: "power2.out"
    }
  );
  useGsap.to(".description-poste", {
      autoAlpha: 1, // Rend visible et ajuste l'opacité
      y: 0, // Remet la carte à sa position normale
      delay: 0.9,
      duration: 1, 
      ease: "power2.out"
    }
  );
  useGsap.to(".offre-interesser", {
      autoAlpha: 1, // Rend visible et ajuste l'opacité
      x: 0, // Remet la carte à sa position normale
      delay: 0.5,
      duration: 1, 
      ease: "power2.out"
    }
  );

});

const offre = computed(() =>
  offresStore.offres.find(i => String(i.id) === String(offreId))
)
const otherOffres = computed(() => {
  return offresStore.offres.filter(i => String(i.id) !== String(offreId))
})
const goBack = () => {
  router.back()
}


</script>
