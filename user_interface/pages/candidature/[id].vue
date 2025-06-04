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
        <form action="" enctype="multipart/form-data" class="flex flex-col gap-20" @submit.prevent="submitCandidature">
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
                    v-model="formData.name"
                />
                </div>
                <div class="flex flex-col gap-1 text-xl">
                <label for="email">Email</label>
                <input
                    type="email"
                    name="email"
                    id="email"
                    class="h-14 w-107 rounded-sm border border-[#ccc9c9] p-2 focus:outline focus:outline-[#8352A5] hover:outline-[#8352A5] hover:outline cursor-pointer"
                    v-model="formData.email"
                />
                </div>
                <div class="flex flex-col gap-1 text-xl">
                <label for="phone">Telephone</label>
                <input
                    type="tel"
                    name="phone"
                    id="phone"
                    class="h-14 w-107 rounded-sm border border-[#ccc9c9] p-2 focus:outline focus:outline-[#8352A5] hover:outline-[#8352A5] hover:outline cursor-pointer"
                    v-model="formData.phone"
                />
                </div>
                <div class="flex flex-col gap-1 text-xl">
                <label for="address">Adresse</label>
                <input
                    type="text"
                    name="address"
                    id="address"
                    class="h-14 w-107 rounded-sm border border-[#ccc9c9] p-2 focus:outline focus:outline-[#8352A5] hover:outline-[#8352A5] hover:outline cursor-pointer"
                    v-model="formData.address"
                />
                </div>
            </div>
            <MiniTitle message1="Vos qualifications personnelles" class="candidature-document" />
            <div class="flex flex-col gap-10 pl-11" data-aos="fade-left" data-aos-duration="800">
                <div class="flex flex-col gap-1 text-xl">
                <label for="nivEtude">Niveau d'etude</label>
                <input
                    type="text"
                    name="nivEtude"
                    id="nivEtude"
                    class="h-14 w-107 rounded-sm border border-[#ccc9c9] p-2 focus:outline focus:outline-[#8352A5] hover:outline-[#8352A5] hover:outline cursor-pointer "
                    v-model="formData.nivEtude"
                />
                </div>
                <div class="flex flex-col gap-1 text-xl">
                <label for="nivExp">Niveau d'experience</label>
                <input
                    type="text"
                    name="nivExp"
                    id="nivExp"
                    class="h-14 w-107 rounded-sm border border-[#ccc9c9] p-2 focus:outline focus:outline-[#8352A5] hover:outline-[#8352A5] hover:outline cursor-pointer"
                    v-model="formData.nivExp"
                />
                </div>
                <div class="flex flex-col gap-1 text-xl">
                <label for="langue">Langue</label>
                <select name="langue" id="langue" class="h-14 w-107 rounded-sm border border-[#ccc9c9] p-2 focus:outline focus:outline-[#8352A5] hover:outline-[#8352A5] hover:outline cursor-pointer text-gray-300" v-model="formData.langue">
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
                <input type="file" name="cv" id="cv" @change="handleFileChange($event, 'cv')" class="hidden" />
                </div>
                <div class="flex flex-col gap-3 pl-11 text-xl">
                <p>Deposer votre Photo-cni</p>
                <label
                    for="photoCNI"
                    class="flex h-35 w-107 cursor-pointer items-center justify-center rounded-lg border border-[#ccc9c9] p-2 text-center hover:border-[#8352A5]"
                    >selectionner un fichier ou glisser-deposer</label
                >
                <input type="file" name="photoCNI" id="photoCNI" @change="handleFileChange($event, 'photoCNI')" class="hidden" />
                </div>
                <div class="flex flex-col gap-3 pl-11 text-xl">
                <p>Deposer votre plan de localisation</p>
                <label
                    for="plan"
                    class="flex h-35 w-107 cursor-pointer items-center justify-center rounded-lg border border-[#ccc9c9] p-2 text-center hover:border-[#8352A5]"
                    >selectionner un fichier ou glisser-deposer</label
                >
                <input type="file" name="plan" id="plan" @change="handleFileChange($event, 'plan')" class="hidden" />
                </div>
                <div class="flex flex-col gap-3 pl-11 text-xl">
                <p>Deposer votre lettre de motivation</p>
                <label
                    for="lettreMotivation"
                    class="flex h-35 w-107 cursor-pointer items-center justify-center rounded-lg border border-[#ccc9c9] p-2 text-center hover:border-[#8352A5]"
                    >selectionner un fichier ou glisser-deposer</label
                >
                <input type="file" name="lettreMotivation" id="lettreMotivation" @change="handleFileChange($event, 'lettreMotivation')" class="hidden" />
                </div>
                <div class="flex flex-col gap-3 pl-11 text-xl">
                <p>Deposer votre lettre de recommandation</p>
                <label
                    for="lettreRecommandation"
                    class="flex h-35 w-107 cursor-pointer items-center justify-center rounded-lg border border-[#ccc9c9] p-2 text-center hover:border-[#8352A5]"
                    >selectionner un fichier ou glisser-deposer</label
                >
                <input type="file" name="lettreRecommandation" id="lettreRecommandation" @change="handleFileChange($event, 'lettreRecommandation')" class="hidden" />
                </div>
            </div>
            </div>
            <div class="flex w-250 flex-row items-center justify-between pl-11">
            <NuxtLink to="/info_offre" class="mt-10 w-40 rounded-sm bg-[#8352A5] px-1 py-2 text-center text-xl text-white" data-aos="fade-right"data-aos-duration="800">
                Precedent
            </NuxtLink>
            <button
                type="submit"
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
const formData = ref({
  name: '',
  email: '',
  phone: '',
  address: '',
  nivEtude: '',
  nivExp: '',
  langue: 'anglais'
})
const files = ref({
  cv: null,
  photoCNI: null,
  plan: null,
  lettreMotivation: null,
  lettreRecommandation: null
});

const countstore = useCounterStore();
const router = useRouter()
const route = useRoute()
const selectedOfferId = ref(route.params.offreId || null)
const offresStore = useOffresStore();



const handleFileChange = (event, fileType) => {
  const file = event.target.files[0];
  if (file) {
    files.value[fileType] = file;
  } else {
    files.value[fileType] = null;
  }
};
const submitCandidature = async () => {
    try {
    const data = new FormData()
    // Ajout des champs textes
    data.append('name', formData.value.name)
    data.append('email', formData.value.email)
    data.append('phone', formData.value.phone)
    data.append('address', formData.value.address)
    data.append('niveau_etude', formData.value.nivEtude)
    data.append('niveau_experience', formData.value.nivExp)
    data.append('langue', formData.value.langue)
    data.append("offre_id", selectedOfferId.value)
    // Ajout des fichiers
    if (files.value.cv)
      data.append('cv', files.value.cv)
    if (files.value.photoCNI)
      data.append('photo_cni', files.value.photoCNI)
    if (files.value.plan)
      data.append('plan', files.value.plan)
    if (files.value.lettreMotivation)
      data.append('lettre_motivation', files.value.lettreMotivation)
    if (files.value.lettreRecommandation)
      data.append('lettre_recommandation', files.value.lettreRecommandation)
    
    const response = await fetch('http://localhost:8000/api/candidature', {
      method: 'POST',
      body: data
    })  
    console.log('Réponse du serveur:', response)
    } catch (error) {
    console.error('Erreur lors de la soumission du formulaire:', error)
    }

}

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
