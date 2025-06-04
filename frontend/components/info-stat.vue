<template>
  <div ref="refd" class="flex w-200 flex-col gap-3 rounded-2xl border border-[#ccc9c9] px-7 pt-4 pb-4 opacity-0">
    <h1 ref="reft" class="text-7xl">{{ message1 }}</h1>
    <p class="text-xl text-[#ccc9c9]">{{ message2 }}</p>
    <p class="text-5xl">{{ number }}</p>
    <div class="flex flex-row justify-end">
      <div
        class="group flex cursor-pointer flex-row items-center gap-2"
        v-if="props.message1 === 'Offres'"
      >
        <p class="text-[#8352A5] duration-200 group-hover:-translate-x-1 group-hover:duration-200">
          voir plus
        </p>
        <div class="size-6 duration-200 group-hover:translate-x-1 group-hover:duration-200">
          <img src="@/public/icons8-arrow-64.png" alt="arrow" class="size-full" />
        </div>
      </div>
      <NuxtLink
        to="/admin-demande"
        class="group flex cursor-pointer flex-row items-center gap-2"
        v-if="props.message1 === 'Demandes'"
      >
        <p class="text-[#5C7CFA] duration-200 group-hover:-translate-x-1 group-hover:duration-200">
          voir plus
        </p>
        <div class="size-6 duration-200 group-hover:translate-x-1 group-hover:duration-200">
          <img src="@/public/icons8-arrow-64 (1).png" alt="arrow" class="size-full" />
        </div>
      </NuxtLink>
      <div
        class="group flex cursor-pointer flex-row items-center gap-2"
        v-if="props.message1 === 'Candidatures'"
      >
        <p class="text-[#FAF852] duration-200 group-hover:-translate-x-1 group-hover:duration-200">
          voir plus
        </p>
        <div class="size-6 duration-200 group-hover:translate-x-1 group-hover:duration-200">
          <img src="@/public/icons8-arrow-64 (2).png" alt="arrow" class="size-full" />
        </div>
      </div>
      <div
        class="group flex cursor-pointer flex-row items-center gap-2"
        v-if="props.message1 === 'Entretien'"
      >
        <p class="text-[#FA5252] duration-200 group-hover:-translate-x-1 group-hover:duration-200">
          voir plus
        </p>
        <div class="size-6 duration-200 group-hover:translate-x-1 group-hover:duration-200">
          <img src="@/public/icons8-arrow-64 (3).png" alt="arrow" class="size-full" />
        </div>
      </div>
    </div>
  </div>
</template>
<script setup>
  const props = defineProps({
    message1: "string",
    message2: "string",
    number: "number",
  });
  const reft = useTemplateRef("reft");
  const refd = useTemplateRef("refd");

  onMounted(() => {
    if (props.message1 === "Offres") {
      reft.value?.classList.add("text-[#8352A5]");
      refd.value?.classList.add("nombre-offre");
    }
    if (props.message1 === "Demandes") {
      reft.value?.classList.add("text-[#5C7CFA]");
      refd.value?.classList.add("nombre-demande");
    }
    if (props.message1 === "Candidatures") {
      reft.value?.classList.add("text-[#FAF852]");
      refd.value?.classList.add("nombre-candidature");
    }
    if (props.message1 === "Entretien") {
      reft.value?.classList.add("text-[#FA5252]");
      refd.value?.classList.add("nombre-entretien");
    }

    useGsap.fromTo(".nombre-offre", 
        { x: -50 }, // Valeurs initiales
        { autoAlpha: 1, x: 0, duration: 0.5, ease: "power2.out" } // Valeurs finales
    );
    useGsap.fromTo(".nombre-demande", 
        { x: 50 }, // Valeurs initiales
        { autoAlpha: 1, x: 0, duration: 0.5, ease: "power2.out", delay: 0.2 } // Valeurs finales
    );
    useGsap.fromTo(".nombre-candidature", 
        { x: -50 }, // Valeurs initiales
        { autoAlpha: 1, x: 0, duration: 0.5, ease: "power2.out", delay: 0.3 } // Valeurs finales
    );
    useGsap.fromTo(".nombre-entretien", 
        { x: 50 }, // Valeurs initiales
        { autoAlpha: 1, x: 0, duration: 0.5, ease: "power2.out", delay: 0.1 } // Valeurs finales
    );

  });
</script>
