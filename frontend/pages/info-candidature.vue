<template>
  <div class="flex flex-col items-center justify-center">
    <div class="flex w-18/20 flex-col gap-30 py-30">
      <div class="flex w-5/10 flex-col gap-25">
        <div class="flex flex-col gap-8">
          <MiniTitle message1="Informations personnelles" class="title-nos-offres" />
          <div class="flex flex-col gap-5 text-2xl info opacity-0 translate-y-20">
            <h1 class="font-semibold">Nom et prenom</h1>
            <p class="ml-1">Lorem ipsum vst csvtv</p>
          </div>
          <div class="flex flex-col gap-5 text-2xl info opacity-0 translate-y-20">
            <h1 class="font-semibold">Email</h1>
            <p class="ml-1">Lorem ipsum vst csvtv</p>
          </div>
          <div class="flex flex-col gap-5 text-2xl info opacity-0 translate-y-20">
            <h1 class="font-semibold">Tel</h1>
            <p class="ml-1">Lorem ipsum vst csvtv</p>
          </div>
          <div class="flex flex-col gap-5 text-2xl info opacity-0 translate-y-20">
            <h1 class="font-semibold">Adresse</h1>
            <p class="ml-1">Lorem ipsum vst csvtv</p>
          </div>
          <div class="flex flex-col gap-5 text-2xl info opacity-0 translate-y-20">
            <h1 class="font-semibold">Niveau d'etude</h1>
            <p class="ml-1">Lorem ipsum vst csvtv</p>
          </div>
          <div class="flex flex-col gap-5 text-2xl info opacity-0 translate-y-20">
            <h1 class="font-semibold">Niveau d'experience</h1>
            <p class="ml-1">Lorem ipsum vst csvtv</p>
          </div>
          <div class="flex flex-col gap-5 text-2xl info opacity-0 translate-y-20">
            <h1 class="font-semibold">Langue</h1>
            <p class="ml-1">Lorem ipsum vst csvtv</p>
          </div>
        </div>
        <div class="flex flex-col gap-15">
          <MiniTitle message1="Documents de candidature" class="title-rechercher-offre" />
          <div class="flex flex-wrap gap-10 info-doc opacity-0 translate-y-20">
            <div
              class="flex w-60 items-center justify-center rounded-sm bg-[#8352A5] px-4 py-3 text-xl text-white cursor-pointer"
            >
              CV
            </div>
            <div
              class="flex w-60 items-center justify-center rounded-sm bg-[#8352A5] px-4 py-3 text-xl text-white cursor-pointer"
            >
              photo-cni
            </div>
            <div
              class="flex w-60 items-center justify-center rounded-sm bg-[#8352A5] px-4 py-3 text-xl text-white cursor-pointer"
            >
              lettre-motivation
            </div>
            <div
              class="flex w-60 items-center justify-center rounded-sm bg-[#8352A5] px-4 py-3 text-xl text-white cursor-pointer"
            >
              plan localisation
            </div>
            <div
              class="flex w-60 items-center justify-center rounded-sm bg-[#8352A5] px-4 py-3 text-xl text-white cursor-pointer"
            >
              lettre-recommandation
            </div>
          </div>
        </div>
        <div class="mt-10 flex flex-row gap-8">
          <div
            class="flex w-60 items-center justify-center rounded-sm bg-red-500 px-4 py-3 text-xl text-white cursor-pointer"
            data-aos = "fade-up"
          >
            Accepter
          </div>
          <div
            class="flex w-60 items-center justify-center rounded-sm bg-green-500 px-4 py-3 text-xl text-white cursor-pointer"
            data-aos = "fade-up"
            data-aos-delay="200"
          >
            Rejeter
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
onMounted(() => {

  useGsap.to(".info", {
      autoAlpha: 1, // Rend visible et ajuste l'opacité
      y: 0, // Remet la carte à sa position normale
      duration: 1, 
      delay: 0.3,
      ease: "power2.out"
    }
  );
  useGsap.to(".info-doc", {
      autoAlpha: 1, // Rend visible et ajuste l'opacité
      y: 0, // Remet la carte à sa position normale
      duration: 1, 
      delay: 0.7,
      ease: "power2.out"
    }
  );

});
</script>
