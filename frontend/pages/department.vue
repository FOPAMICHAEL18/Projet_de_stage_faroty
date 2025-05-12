<template>
  <div class="flex flex-col items-center justify-center">
    <div class="flex w-18/20 flex-col gap-15 py-15">
      <div
        class="flex h-30 w-full items-center justify-center rounded-lg bg-[#8352A5] text-5xl text-white department-bar opacity-0 -translate-x-20"
      >
        Bienvenue Msr FOPA
      </div>
      <form
        action=""
        class="flex h-fit flex-col gap-10 rounded-xl border border-gray-300 px-18 pt-8 pb-7 department-form opacity-0 translate-x-20"
      >
        <div class="flex justify-center text-4xl text-[#8352A5]">Soumettez votre demande</div>
        <div class="flex flex-col gap-4 text-xl">
          <div class="flex flex-col gap-4">
            <label for="name">Titre de la demande</label>
            <input
              type="text"
              name="name"
              id="name"
              class="h-14 w-250 rounded-sm border border-gray-300 p-2"
            />
          </div>
          <div class="flex flex-col gap-4 text-xl">
            <label for="demande">Contenu de la demande</label>
            <textarea
              name="demande"
              id="demande"
              class="h-70 w-380 rounded-sm border border-gray-300 p-2"
            ></textarea>
          </div>
        </div>
        <div class="flex flex-col items-center gap-4">
          <button class="rounded-md bg-[#8352A5] px-12 py-2 text-2xl text-white">
            Soumettre la demande
          </button>
        </div>
      </form>
    </div>
  </div>
</template>

<script setup>
onMounted(() => {

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
