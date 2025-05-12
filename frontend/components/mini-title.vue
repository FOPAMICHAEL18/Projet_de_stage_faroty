<template>
  <div class="flex flex-row items-center gap-10 opacity-0">
    <div class="h-15 w-2 rounded-xs bg-[#8352A5]"></div>
    <div class="text-4xl text-[#8352A5]">{{ message1 }}</div>
  </div>
</template>

<script setup>
  const props = defineProps({
    message1: "string",
  });

  onMounted(() => {

      useGsap.fromTo(".title-rechercher-offre", 
        { x: 20 }, // Valeurs initiales
        { autoAlpha: 1, x: 0, duration: 1, ease: "power2.out", delay: 0.5 } // Valeurs finales
      );
      useGsap.fromTo(".title-derniere-offre", 
        { x: 20 }, // Valeurs initiales
        { autoAlpha: 1, x: 0, duration: 1, ease: "power2.out", delay: 1.8 } // Valeurs finales
      );
      useGsap.fromTo(".title-nos-offres", 
        { x: 20 }, // Valeurs initiales
        { autoAlpha: 1, x: 0, duration: 1, ease: "power2.out" } // Valeurs finales
      );
      useGsap.fromTo(".title-liste-demande", 
        { x: -50 }, // Valeurs initiales
        { autoAlpha: 1, x: 0, duration: 1, ease: "power2.out" } // Valeurs finales
      );
      useGsap.fromTo(".title-offre", 
        { x: 50 }, // Valeurs initiales
        { autoAlpha: 1, x: 0, duration: 1, delay:0.5, ease: "power2.out" } // Valeurs finales
      );
      useGsap.fromTo(".candidature-personnel", 
        { x: 20 }, // Valeurs initiales
        { autoAlpha: 1, x: 0, duration: 1, ease: "power2.out", delay: 1.4 } // Valeurs finales
      );
      useGsap.fromTo(".candidature-document", 
        { x: 20 }, // Valeurs initiales
        { autoAlpha: 1, x: 0, duration: 1.6, ease: "power2.out", delay: 1.4 } // Valeurs finales
      );
      useGsap.fromTo(".creation-detail", 
      { opacity: 0 }, // État initial (invisible, légèrement en bas)
      { 
        delay: 0.2,
        autoAlpha: 1,
        scrollTrigger: {
          trigger: ".creation-detail", // Élément déclencheur
        }
      }

      );




    });

</script>
