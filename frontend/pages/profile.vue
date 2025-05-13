<template>
  <div class="flex flex-col items-center justify-center">
    <div class="flex w-18/20 flex-col gap-30 py-30">
      <div class="flex flex-row items-center gap-30">
        <div class="size-50">
          <img src="@/public/icons8-male-user-100.png" alt="user-male" class="size-full" />
        </div>
        <div
          class="absolute top-87 left-59 flex flex-row items-center gap-2 rounded-md bg-[#8352A5] px-3 py-1 cursor-pointer"
        >
          <div class="size-5">
            <img src="@/public/icons8-edit-100.png" alt="edit" class="size-full" />
          </div>
          <p class="text-white">modifier</p>
        </div>
        <div class="flex flex-col gap-4">
          <p class="text-5xl">Fopa Michael Kemlong</p>
          <p class="text-[#ccc9c9]">Votre compte personnel</p>
        </div>
      </div>
      <div class="flex flex-row gap-55">
        <div class="flex flex-col gap-10">
          <MiniOption v-for="option in options" :message1="option" />
        </div>
        <div class="flex w-320 flex-col gap-20" v-if="option1">
          <mini-option-interface
            message1="Nom et prenom"
            message2="Vous pouvez changer votre nom"
            message3="changer nom"
          />
          <mini-option-interface
            message1="Supprimer votre compte"
            message2="vous pouvez supprimer votre compte"
            message3="supprimer compte"
          />
        </div>
        <div class="flex w-320 flex-col gap-20" v-if="option2">
          <mini-option-interface
            message1="Mot de passe"
            message2="Vous pouvez changer votre mot de passe"
            message3="changer mot de passe"
          />
        </div>
        <div class="flex w-320 flex-col gap-20" v-if="option3">
          <mini-option-interface
            message1="Email"
            message2="Vous pouvez changer votre email"
            message3="changer email"
          />
        </div>
        <div class="flex w-320 flex-col gap-20" v-if="option4">
          <mini-option-interface
            message1="Poste"
            message2="Vous pouvez changer votre poste"
            message3="changer poste"
          />
        </div>
      </div>
      <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2" v-if="visible">
        <Confirmation message1="nom" />
      </div>
    </div>
  </div>
</template>

<script setup>
const options = ["Compte", "Mot de passe", "Email", "Poste"];
const countstore = useCounterStore();
const visible = computed(() => countstore.visible);
const option1 = computed(() => countstore.option1);
const option2 = computed(() => countstore.option2);
const option3 = computed(() => countstore.option3);
const option4 = computed(() => countstore.option4);

onMounted(() => {

  useGsap.to(".index-bar", {
      autoAlpha: 1, // Rend visible et ajuste l'opacité
      y: 0, // Remet la carte à sa position normale
      duration: 1, 
      ease: "power2.out"
    }
  );    

});
</script>
