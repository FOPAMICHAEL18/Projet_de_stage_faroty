<template>
  <div class="flex flex-col items-center justify-center">
    <div class="flex w-18/20 flex-col gap-15 py-20">
      <div class="flex items-center justify-center">
        <p
          ref="lign"
          class="text-4xl text-[#8352A5] after:mt-4 after:ml-0 after:block after:h-2 after:w-0 after:rounded-xs after:bg-[#8352A5] after:transition-all after:duration-1000 after:delay-500 candidature-candidature opacity-0 -translate-y-20 "
        >
          Deposer votre candidature
        </p>
      </div>
      <form action="" class="flex flex-col gap-20">
        <div class="flex flex-col gap-14">
          <MiniTitle message1="Vos informations personnelles" class="candidature-personnel" />
          <div class="flex flex-col gap-10 pl-11 candidature-informations opacity-0 translate-x-20">
            <div class="flex flex-col gap-1 text-xl">
              <label for="name">Nom et prenom</label>
              <input
                type="text"
                name="name"
                id="name"
                class="h-14 w-107 rounded-sm border border-[#ccc9c9] p-2 focus:outline focus:outline-[#8352A5] hover:outline-[#8352A5] hover:outline cursor-pointer "
              />
            </div>
            <div class="flex flex-col gap-1 text-xl">
              <label for="email">Email</label>
              <input
                type="email"
                name="email"
                id="email"
                class="h-14 w-107 rounded-sm border border-[#ccc9c9] p-2 focus:outline focus:outline-[#8352A5] hover:outline-[#8352A5] hover:outline cursor-pointer"
              />
            </div>
            <div class="flex flex-col gap-1 text-xl">
              <label for="phone">Telephone</label>
              <input
                type="tel"
                name="phone"
                id="phone"
                class="h-14 w-107 rounded-sm border border-[#ccc9c9] p-2 focus:outline focus:outline-[#8352A5] hover:outline-[#8352A5] hover:outline cursor-pointer"
              />
            </div>
            <div class="flex flex-col gap-1 text-xl">
              <label for="address">Adresse</label>
              <input
                type="text"
                name="address"
                id="address"
                class="h-14 w-107 rounded-sm border border-[#ccc9c9] p-2 focus:outline focus:outline-[#8352A5] hover:outline-[#8352A5] hover:outline cursor-pointer"
              />
            </div>
          </div>
          <MiniTitle message1="Vos qualifications personnelles" class="candidature-document" />
          <div class="flex flex-col gap-10 pl-11" data-aos="fade-left" data-aos-duration="800">
            <div class="flex flex-col gap-1 text-xl">
              <label for="nivEtude">Niveau d'etude</label>
              <input
                type="text"
                name="name"
                id="name"
                class="h-14 w-107 rounded-sm border border-[#ccc9c9] p-2 focus:outline focus:outline-[#8352A5] hover:outline-[#8352A5] hover:outline cursor-pointer "
              />
            </div>
            <div class="flex flex-col gap-1 text-xl">
              <label for="nivExp">Niveau d'experience</label>
              <input
                type="email"
                name="email"
                id="email"
                class="h-14 w-107 rounded-sm border border-[#ccc9c9] p-2 focus:outline focus:outline-[#8352A5] hover:outline-[#8352A5] hover:outline cursor-pointer"
              />
            </div>
            <div class="flex flex-col gap-1 text-xl">
              <label for="langue">Langue</label>
              <select name="langue" id="langue" class="h-14 w-107 rounded-sm border border-[#ccc9c9] p-2 focus:outline focus:outline-[#8352A5] hover:outline-[#8352A5] hover:outline cursor-pointer text-gray-300">
                <option value="anglais" selected>Anglais</option>
                <option value="francais">Francais</option>
                <option value="anglais/francais">Anglais/Francais</option>
              </select>
            </div>
          </div>
          <MiniTitle message1="Vos documents de candidature" class="crestion-detail" data-aos="fade-left"  />
          <div class="flex w-7/10 flex-wrap gap-13" data-aos="fade-up" data-aos-duration="800" >
            <div class="flex flex-col gap-3 pl-11 text-xl">
              <p>Deposer votre CV</p>
              <label
                for="cv"
                class="flex h-35 w-107 cursor-pointer items-center justify-center rounded-lg border border-[#ccc9c9] p-2 text-center hover:border-[#8352A5]"
                >selectionner un fichier ou glisser-deposer</label
              >
              <input type="file" name="cv" id="cv" class="hidden" />
            </div>
            <div class="flex flex-col gap-3 pl-11 text-xl">
              <p>Deposer votre Photo-cni</p>
              <label
                for="cv"
                class="flex h-35 w-107 cursor-pointer items-center justify-center rounded-lg border border-[#ccc9c9] p-2 text-center hover:border-[#8352A5]"
                >selectionner un fichier ou glisser-deposer</label
              >
              <input type="file" name="cv" id="cv" class="hidden" />
            </div>
            <div class="flex flex-col gap-3 pl-11 text-xl">
              <p>Deposer votre plan de localisation</p>
              <label
                for="cv"
                class="flex h-35 w-107 cursor-pointer items-center justify-center rounded-lg border border-[#ccc9c9] p-2 text-center hover:border-[#8352A5]"
                >selectionner un fichier ou glisser-deposer</label
              >
              <input type="file" name="cv" id="cv" class="hidden" />
            </div>
            <div class="flex flex-col gap-3 pl-11 text-xl">
              <p>Deposer votre lettre de motivation</p>
              <label
                for="cv"
                class="flex h-35 w-107 cursor-pointer items-center justify-center rounded-lg border border-[#ccc9c9] p-2 text-center hover:border-[#8352A5]"
                >selectionner un fichier ou glisser-deposer</label
              >
              <input type="file" name="cv" id="cv" class="hidden" />
            </div>
            <div class="flex flex-col gap-3 pl-11 text-xl">
              <p>Deposer votre lettre de recommandation</p>
              <label
                for="cv"
                class="flex h-35 w-107 cursor-pointer items-center justify-center rounded-lg border border-[#ccc9c9] p-2 text-center hover:border-[#8352A5]"
                >selectionner un fichier ou glisser-deposer</label
              >
              <input type="file" name="cv" id="cv" class="hidden" />
            </div>
          </div>
        </div>
        <div class="flex w-250 flex-row items-center justify-between pl-11">
          <NuxtLink to="/info-offre" class="mt-10 w-40 rounded-sm bg-[#8352A5] px-1 py-2 text-center text-xl text-white" data-aos="fade-right"data-aos-duration="800">
            Precedent
          </NuxtLink>
          <button
            class="mt-10 w-40 rounded-sm bg-[#8352A5] px-1 py-2 text-center text-xl text-white"
            data-aos="fade-left"
            data-aos-duration="800"
          >
            Postuler
          </button>
        </div>
      </form>
    </div>
  </div>
</template>

<script setup>

const lign = useTemplateRef("lign");

onMounted(() => {

  lign.value?.classList.add("after:w-106");
  useGsap.to(".candidature-candidature", {
      autoAlpha: 1, // Rend visible et ajuste l'opacité
      y: 0, // Remet la carte à sa position normale
      duration: 1, 
      ease: "power2.out"
    }
  );
  useGsap.to(".candidature-informations", {
      autoAlpha: 1, // Rend visible et ajuste l'opacité
      x: 0, // Remet la carte à sa position normale
      duration: 1, 
      ease: "power2.out",
      delay: 1.5 // Délai de 0.5 seconde avant le début de l'animation
    }
  );

  });

</script>
