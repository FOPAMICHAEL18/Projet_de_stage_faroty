<template>
  <div class="flex flex-col items-center justify-center">
    <div class="flex w-18/20 flex-col gap-15 py-15">
      <div
        class="flex h-30 w-full flex-row items-center justify-between rounded-lg bg-[#8352A5] px-20 offre-bar opacity-0 translate-y-20"
      >
        <h1 class="text-5xl text-white">Developpeur Frontend</h1>
        <div
          class="flex w-50 flex-row items-center justify-center rounded-sm bg-[#F9EDEF] px-2 py-2 text-lg"
        >
          Je veux postuler
        </div>
      </div>
      <div class="flex flex-row justify-between gap-65">
        <div class="flex w-4/10 flex-col gap-25">
          <div class="flex flex-col gap-8">
            <MiniTitle message1="Description du poste" class="title-offre" />
            <div class="text-2xl description-poste opacity-0 translate-y-20">
              <h1 class="font-semibold">Metier</h1>
              <p>Lorem ipsum vst csvtv</p>
            </div>
            <div class="text-2xl description-poste opacity-0 translate-y-20">
              <h1 class="font-semibold">Contrat</h1>
              <p>Lorem ipsum vst csvtv</p>
            </div>
            <div class="text-2xl description-poste opacity-0 translate-y-20">
              <h1 class="font-semibold">Description de la mission</h1>
              <p>
                Lorem ipsum vst csvtv skasjd sksduee djsdisuwe
                wiwsusueiesudidisdksisidkdkdidisud8didisisjkdidisisidi bdgdeue uuwee.
                yedueiedchsusieudygdyue duduwwiwuwyeieyw8 dhdye eydueie cyuidsd duieieie eieididke
                cieieicu eieidkdie9e cuiedididoeieudf dieoeoeoeiodud9dif8f9oe eue9eld.
              </p>
            </div>
            <div class="text-2xl description-poste opacity-0 translate-y-20">
              <h1 class="font-semibold">Profil</h1>
              <p>
                Lorem ipsum vst csvtv jfkkdfj kfkduueiekdk hfjfjdudu jfjfdjdkfkfjude hdjfjff
                jcyeueisdkd iduieueiryryd dideueudididifufifieiee difodid8ei38eoe dieoeid8ded
              </p>
            </div>
          </div>
          <div class="flex flex-col gap-8">
            <MiniTitle message1="Localisation du poste" class="title-offre" />
            <div class="text-2xl">
              <h1 class="font-semibold description-poste opacity-0 translate-y-20">Localisation du poste</h1>
              <p>Lorem ipsum vst csvtv</p>
            </div>
            <div class="text-2xl">
              <h1 class="font-semibold description-poste opacity-0 translate-y-20">Duree du contrat en mois</h1>
              <p>Lorem ipsum vst csvtv</p>
            </div>
          </div>
          <div class="flex flex-col gap-8">
            <MiniTitle message1="Critere du poste" class="title-offre" />
            <div class="text-2xl">
              <h1 class="font-semibold description-poste opacity-0 translate-y-20">Niveau d'etude min.requis</h1>
              <p>Lorem ipsum vst csvtv</p>
            </div>
            <div class="text-2xl">
              <h1 class="font-semibold description-poste opacity-0 translate-y-20">Niveau d'experience min.requis</h1>
              <p>Lorem ipsum vst csvtv</p>
            </div>
            <div class="text-2xl">
              <h1 class="font-semibold description-poste opacity-0 translate-y-20">Niveau d'emploi</h1>
              <p>Lorem ipsum vst csvtv</p>
            </div>
            <div class="text-2xl">
              <h1 class="font-semibold description-poste opacity-0 translate-y-20">Langues</h1>
              <p>Lorem ipsum vst csvtv</p>
            </div>
          </div>
          <div class="mt-10 w-40 rounded-sm bg-[#8352A5] px-1 py-2 text-center text-xl text-white description-poste opacity-0 translate-y-20">
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
            <CubeCase v-for="option in options" :message1="option" /> 
          </div>
        </div>
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
</script>
