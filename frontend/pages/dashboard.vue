<template>
  <div class="flex flex-col items-center justify-center" v-if="isAdmin">
    <div class="flex w-18/20 flex-row gap-5 py-30">
      <div class="flex flex-wrap gap-10">
        <InfoStat
          v-for="stat in stats"
          :message1="stat.title"
          :message2="stat.content"
          :number="stat.number"
        />
      </div>
    </div>
  </div>

  <div class="flex flex-col items-center justify-center" v-if="isUser">
    <div class="flex w-18/20 flex-col gap-15 py-15">
      <div
        class="flex h-30 w-full items-center justify-center rounded-lg bg-[#8352A5] text-5xl text-white department-bar opacity-0 -translate-x-20"
      >
        Bienvenue {{ authStore.user.name }} 
      </div>
      <form
        action=""
        class="flex h-fit flex-col gap-10 rounded-xl border border-gray-300 px-18 pt-8 pb-7 department-form opacity-0 translate-x-20"
      >
        <div class="flex justify-center text-4xl text-[#8352A5]">Soumettez votre demande</div>
        <div class="flex flex-col gap-4 text-xl">
          <div class="flex flex-col gap-4">
            <label for="name" class="w-fit">Titre de la demande</label>
            <input
              type="text"
              name="name"
              id="name"
              class="h-14 w-250 rounded-sm border border-gray-300 p-2 focus:outline focus:outline-[#8352A5] hover:outline-[#8352A5] hover:outline cursor-pointer"
            />
          </div>
          <div class="flex flex-col gap-4 text-xl">
            <label for="demande" class="w-fit">Contenu de la demande</label>
            <textarea
              name="demande"
              id="demande"
              class="h-70 w-380 rounded-sm border border-gray-300 p-2 focus:outline focus:outline-[#8352A5] hover:outline-[#8352A5] hover:outline cursor-pointer"
            ></textarea>
          </div>
        </div>
        <div class="flex flex-col items-center gap-4">
          <button class="rounded-md bg-[#8352A5] px-12 py-2 text-2xl text-white cursor-pointer">
            Soumettre la demande
          </button>
        </div>
      </form>
    </div>
  </div>
</template>

<script setup>

const authStore = useAuthStore()

// Propriété calculée pour vérifier si l'utilisateur est admin
const isAdmin = computed(() => {
  return authStore.user && authStore.user.role === "admin"
})

// Propriété calculée pour vérifier si l'utilisateur est un utilisateur normal
const isUser = computed(() => {
  return authStore.user && authStore.user.role === "user"
})

const stats = [
  { id: 1, number: 1, title: "Offres", content: "Nombre d'offres" },
  { id: 2, number: 2, title: "Demandes", content: "Nombre de demandes" },
  { id: 3, number: 100, title: "Candidatures", content: "Nombre de candidatures" },
  { id: 4, number: 4, title: "Entretien", content: "Nombre d'entretiens" },
];
const countstore = useCounterStore();

onMounted(() => {

  useGsap.to(".index-bar", {
      autoAlpha: 1, // Rend visible et ajuste l'opacité
      y: 0, // Remet la carte à sa position normale
      duration: 1, 
      ease: "power2.out"
    }
  );
  useGsap.to(".department-bar", {
      autoAlpha: 1, // Rend visible et ajuste l'opacité
      x: 0, // Remet la carte à sa position normale
      duration: 1, 
      ease: "power2.out"
    }
  );
  useGsap.to(".department-form", {
      autoAlpha: 1, // Rend visible et ajuste l'opacité
      x: 0, // Remet la carte à sa position normale
      duration: 1, 
      ease: "power2.out"
    }
  );

});

</script>
