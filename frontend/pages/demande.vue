<template>
  <div class="flex flex-col items-center justify-center">
    <div class="flex w-18/20 flex-col items-center gap-15 py-15 pt-30">
      <div class="pb-10">
        <p
          ref="lign"
          class="text-5xl text-[#8352A5] after:mt-2 after:ml-2 after:block after:h-1 after:w-0 after:rounded-lg after:bg-[#8352A5] after:transition-all after:duration-1000 after:delay-500 demande-demande opacity-0 -translate-y-20"
        >
          Vos dernieres demandes
        </p>
      </div>
      <form>
        <input
          type="text"
          name="search"
          class="h-12 w-230 rounded-md border border-[#ccc9c9] p-2 demande-search-bar opacity-0 translate-y-20"
        />
        <div class="absolute bottom-147.5 left-342 size-10 demande-search opacity-0 translate-y-20">
          <img src="@/public/icons8-search-250.png" alt="search" class="size-full" />
        </div>
      </form>
      <div flex class="flex flex-col items-center gap-5">
        <DemandeCase v-for="option in options" :message1="option" class="demande-case opacity-0 translate-y-20" />
      </div>
    </div>
  </div>
</template>

<script setup>
const options = [
  "Besoin d'un Developpeur Frontend",
  "Besoin d'un Développeur Backend",
  "Besoin d'un Développeur Fullstack",
  "Besoin d'un Développeur Mobile",
  "Besoin d'un Développeur Web",
  "Besoin d'un Développeur Data",
  "Besoin d'un Développeur IA",
];
const countstore = useCounterStore();
const lign = useTemplateRef("lign");

onMounted(() => {

  lign.value?.classList.add("after:w-80");
  useGsap.to(".demande-demande", {
      autoAlpha: 1, // Rend visible et ajuste l'opacité
      y: 0, // Remet la carte à sa position normale
      duration: 1, 
      ease: "power2.out"
    }
  );
  useGsap.to(".demande-search-bar", {
      autoAlpha: 1, // Rend visible et ajuste l'opacité
      y: 0, // Remet la carte à sa position normale
      duration: 1, 
      ease: "power2.out"
    }
  );
  useGsap.to(".demande-search", {
      autoAlpha: 1, // Rend visible et ajuste l'opacité
      y: 0, // Remet la carte à sa position normale
      duration: 1, 
      ease: "power2.out"
    }
  );
  useGsap.to(".demande-case", {
      autoAlpha: 1, // Rend visible et ajuste l'opacité
      y: 0, // Remet la carte à sa position normale
      duration: 1, 
      ease: "power2.out"
    }
  );

});
</script>
