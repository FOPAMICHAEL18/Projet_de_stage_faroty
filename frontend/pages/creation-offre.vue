<template>
  <div class="flex flex-col items-center justify-center">
    <div class="flex w-18/20 flex-col gap-30 py-30">
      <form action="" class="flex flex-col gap-30" @submit.prevent="create_offre">
        <div class="flex flex-col gap-14">
          <MiniTitle message1="Description du poste" class="title-nos-offres" />
          <div class="flex flex-col gap-10 creation-poste opacity-0 translate-y-20">
            <div class="flex flex-col gap-1 text-xl">
              <label for="name" class="w-fit">Nom de l'offre</label>
              <input
                type="text"
                name="metier"
                id="name"
                class="h-14 w-107 rounded-sm border border-[#ccc9c9] p-2 focus:outline focus:outline-[#8352A5] hover:outline-[#8352A5] hover:outline cursor-pointer"
                v-model="name_offre"
              />
            </div>
            <div class="flex flex-col gap-1 text-xl">
              <label for="metier" class="w-fit">Metier</label>
              <input
                type="text"
                name="metier"
                id="metier"
                class="h-14 w-107 rounded-sm border border-[#ccc9c9] p-2 focus:outline focus:outline-[#8352A5] hover:outline-[#8352A5] hover:outline cursor-pointer"
                v-model="metier"
              />
            </div>
            <div class="flex flex-col gap-1 text-xl">
              <label for="contrat" class="w-fit">Contrat</label>
              <input
                type="text"
                name="contrat"
                id="contrat"
                class="h-14 w-107 rounded-sm border border-[#ccc9c9] p-2 focus:outline focus:outline-[#8352A5] hover:outline-[#8352A5] hover:outline cursor-pointer"
                v-model="contrat"
              />
            </div>
            <div class="flex flex-col gap-1 text-xl">
              <label for="description" class="w-fit">Description de la mission</label>
              <textarea
                name="description"
                id="description"
                class="h-60 w-160 rounded-sm border border-[#ccc9c9] p-2 focus:outline focus:outline-[#8352A5] hover:outline-[#8352A5] hover:outline cursor-pointer"
                v-model="description"
              />
            </div>
            <div class="flex flex-col gap-1 text-xl">
              <label for="profil" class="w-fit">Profil</label>
              <textarea
                name="profil"
                id="profil"
                class="h-50 w-160 rounded-sm border border-[#ccc9c9] p-2 focus:outline focus:outline-[#8352A5] hover:outline-[#8352A5] hover:outline cursor-pointer"
                v-model="profil"
              />
            </div>
          </div>
          <MiniTitle message1="Detail sur le poste" class="creation-detail" data-aos="fade-right" />
          <div class="flex flex-col gap-10" data-aos="slide-up">
            <div class="flex flex-col gap-1 text-xl">
              <label for="localisation" class="w-fit">localisation du poste</label>
              <input
                type="text"
                name="localisation"
                id="localisation"
                class="h-14 w-107 rounded-sm border border-[#ccc9c9] p-2 focus:outline focus:outline-[#8352A5] hover:outline-[#8352A5] hover:outline cursor-pointer"
                v-model="localisation"
              />
            </div>
            <div class="flex flex-col gap-1 text-xl">
              <label for="duree" class="w-fit">Duree du contrat en mois</label>
              <input
                type="text"
                name="duree"
                id="duree"
                class="h-14 w-107 rounded-sm border border-[#ccc9c9] p-2 focus:outline focus:outline-[#8352A5] hover:outline-[#8352A5] hover:outline cursor-pointer"
                v-model="duree_contrat"
              />
            </div>
          </div>
          <MiniTitle message1="Criteres candidats" class="creation-detail" data-aos="fade-right" />
          <div class="flex flex-col gap-10" data-aos="slide-up">
            <div class="flex flex-col gap-1 text-xl">
              <label for="etude" class="w-fit">Niveau d'etude min.requis</label>
              <input
                type="text"
                name="etude"
                id="etude"
                class="h-14 w-107 rounded-sm border border-[#ccc9c9] p-2 focus:outline focus:outline-[#8352A5] hover:outline-[#8352A5] hover:outline cursor-pointer"
                v-model="niveau_etude"
              />
            </div>
            <div class="flex flex-col gap-1 text-xl">
              <label for="experience" class="w-fit">Niveau d'experience min.requis</label>
              <input
                type="text"
                name="experience"
                id="experience"
                class="h-14 w-107 rounded-sm border border-[#ccc9c9] p-2 focus:outline focus:outline-[#8352A5] hover:outline-[#8352A5] hover:outline cursor-pointer"
                v-model="niveau_experience"
              />
            </div>
            <div class="flex flex-col gap-1 text-xl">
              <label for="langue" class="w-fit">Langue</label>
              <input
                type="text"
                name="langue"
                id="langue"
                class="h-14 w-107 rounded-sm border border-[#ccc9c9] p-2 focus:outline focus:outline-[#8352A5] hover:outline-[#8352A5] hover:outline cursor-pointer"
                v-model="language"
              />
            </div>
          </div>
          <MiniTitle message1="Date d'echeance" class="creation-detail1" data-aos="fade-right" />
          <div class="flex flex-col gap-1 text-xl" data-aos="slide-up">
            <label for="echeance" class="w-fit">Date d'echeance</label>
            <input
              type="text"
              name="echeance"
              id="echeance"
              class="h-14 w-107 rounded-sm border border-[#ccc9c9] p-2 focus:outline focus:outline-[#8352A5] hover:outline-[#8352A5] hover:outline cursor-pointer"
              v-model="delete_offre"
            />
          </div>
        </div>
        <div>
          <button
            class="mt-10 w-50 rounded-sm bg-[#8352A5] px-4 py-2 text-center text-3xl text-white cursor-pointer"
            data-aos="zoom-in-up"
            type="submit"
          >
            Valider
          </button>
        </div>
      </form>
    </div>
  </div>
</template>

<script setup>
const store = useAuthStore();
const countstore = useCounterStore();
const name_offre = ref('');
const delete_offre = ref('');
const metier = ref('');
const contrat = ref('');
const duree_contrat = ref('');
const niveau_etude = ref('');
const niveau_experience = ref('');
const profil = ref('');
const description = ref('');
const language = ref('');
const localisation = ref('');
const error = ref(null);
const router = useRouter();
const { $authFetch } = useNuxtApp();



onMounted(() => {

  useGsap.to(".creation-poste", {
      autoAlpha: 1, // Rend visible et ajuste l'opacité
      y: 0, // Remet la carte à sa position normale
      duration: 1, 
      ease: "power2.out"
    }
  );

});

const create_offre = async () => {
  try {
    const response = await $authFetch('http://localhost:8000/api/store', {
      method: 'POST',
      body: {
        name_offre: name_offre.value,
        metier: metier.value,
        contrat: contrat.value,
        description: description.value,
        profil: profil.value,
        localisation: localisation.value,
        duree_contrat: duree_contrat.value,
        niveau_etude: niveau_etude.value,
        niveau_experience: niveau_experience.value,
        language: language.value,
        delete_offre: delete_offre.value
      }
    })

    error.value = response.message;
    console.log("Offre créée avec succès :", response);
  } catch (error) {
    console.error("Erreur lors de la création de l'offre :", error);
    error.value = "Erreur lors de la création de l'offre."
  }
}
</script>
