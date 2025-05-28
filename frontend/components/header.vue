<template>
  <!-- <div class=" h-20 flex justify-between items-center px-24" v-if="connect">
        <div class="w-28"><img src="@/public/logofaroty.png" alt="logofaroty"></div>
        <div class="bg-[#8352A5] flex justify-center items-center text-white text-xl px-7 pt-2 pb-3 rounded-sm"><NuxtLink to="/log-in">connexion</NuxtLink></div>
    </div> -->

  <div class="flex h-20 items-center justify-between px-25" v-if="isAdmin || isUser">
    <div class="w-28 header-connection "><img src="@/public/logofaroty.png" alt="logofaroty" /></div>
    <div class="flex items-center gap-25">
      <div class="flex gap-15 text-xl text-[#8352A5]" v-if="isAdmin">
        <div class="group px-4 hover:cursor-pointer">
          <!-- <p ref="section" :class="conditionalclass" class=" after:block after:w-4.5 after:h-0.5 after:bg-[#8352A5] after:invisible " @click="change">Accueil</p> -->
          <p ref="inputdash1" :class="conditionalclass" class="after:block after:h-0.5 after:w-0 after:bg-[#8352A5] after:transition-all after:duration-500 group-hover:after:w-4.5" @click="selectdash1">
            Accueil
          </p>
        </div>
        <div class="group hover:cursor-pointer">
          <p
            ref="inputdash2"
            :class="conditionalclass"
            class="after:ml-0.5 after:block after:h-0.5 after:w-0 after:bg-[#8352A5] after:transition-all after:duration-500 group-hover:after:w-4.5"
            @click="selectdash2"
          >
            Gestion des demandes
          </p>
        </div>
        <div>
          <div class="group peer flex items-center justify-center gap-2 hover:cursor-pointer">
            <p
              ref="inputdash3"
              :class="conditionalclass"
              class="after:ml-0.5 after:block after:h-0.5 after:w-0 after:bg-[#8352A5] after:transition-all after:duration-500 group-hover:after:w-4.5"
              @click=""
            >
              Gestion des offres
            </p>
            <div class="mt-1 size-3 duration-500 group-hover:rotate-180 group-hover:duration-500">
              <img src="@/public/icons8-down-arrow-100 (1).png" alt="arrow" class="size-full" />
            </div>
          </div>
          <div
            class="invisible absolute top-18 flex w-56 translate-y-2 flex-col gap-2 rounded-md bg-white px-4 py-3 text-xl text-gray-500 opacity-0 shadow-lg transition-all duration-500 peer-hover:visible peer-hover:translate-y-0 peer-hover:opacity-100 peer-hover:duration-500 hover:visible hover:translate-y-0 hover:opacity-100 z-10"
          >
            <div
              class="cursor-pointer border-b border-gray-200 py-2 hover:border-[#8352A5] hover:text-[#8352A5]"
            >
              Creer une session
            </div>
            <div
              class="cursor-pointer border-b border-gray-200 py-2 hover:border-[#8352A5] hover:text-[#8352A5]"
            >
              Liste des sessions
            </div>
            <div class="cursor-pointer py-2 hover:border-[#8352A5] hover:text-[#8352A5]">
              Session encours
            </div>
          </div>
        </div>
        <div>
          <div class="group peer flex items-center justify-center gap-2 hover:cursor-pointer">
            <p
              ref="inputdash4"
              :class="conditionalclass"
              class="after:ml-0.5 after:block after:h-0.5 after:w-0 after:bg-[#8352A5] after:transition-all after:duration-500 group-hover:after:w-4.5"
              @click=""
            >
              Planification
            </p>
            <div class="mt-1 size-3 duration-500 group-hover:rotate-180 group-hover:duration-500">
              <img src="@/public/icons8-down-arrow-100 (1).png" alt="arrow" class="size-full" />
            </div>
          </div>
          <div
            class="invisible absolute top-18 flex w-56 translate-y-2 flex-col gap-2 rounded-md bg-white px-4 py-3 text-xl text-gray-500 opacity-0 shadow-lg transition-all duration-500 peer-hover:visible peer-hover:translate-y-0 peer-hover:opacity-100 peer-hover:duration-500 hover:visible hover:translate-y-0 hover:opacity-100 z-10"
          >
            <div
              class="cursor-pointer border-b border-gray-200 py-2 hover:border-[#8352A5] hover:text-[#8352A5]"
            >
              Creer un entretien
            </div>
            <div
              class="cursor-pointer border-b border-gray-200 py-2 hover:border-[#8352A5] hover:text-[#8352A5]"
            >
              Liste des entretien
            </div>
            <div class="cursor-pointer py-2 hover:border-[#8352A5] hover:text-[#8352A5]">
              Ancien entretien
            </div>
          </div>
        </div>
      </div>
      <div class="mr-80 flex gap-15 text-xl text-[#8352A5]" v-if="isUser">
        <div class="group px-4 hover:cursor-pointer">
          <!-- <p ref="section" :class="conditionalclass" class=" after:block after:w-4.5 after:h-0.5 after:bg-[#8352A5] after:invisible " @click="change">Accueil</p> -->
          <p
            ref="inputdash1"
            :class="conditionalclass"
            class="after:block after:h-0.5 after:w-0 after:bg-[#8352A5] after:transition-all after:duration-500 group-hover:after:w-4.5"
            @click="selectdash1"
          >
            Demande de recrutement
          </p>
        </div>
        <div class="group hover:cursor-pointer">
          <p
            ref="inputdash2"
            :class="conditionalclass"
            class="after:ml-0.5 after:block after:h-0.5 after:w-0 after:bg-[#8352A5] after:transition-all after:duration-500 group-hover:after:w-4.5"
            @click="selectdash2"
          >
            Liste des demandes
          </p>
        </div>
      </div>
      <div>
        <div ref="user-pp" class="w-12 cursor-pointer rounded-full" @click="useroption">
          <img src="@/public/icons8-male-user-100.png" alt="user" />
        </div>
        <div
          ref="user-setting"
          class="invisible absolute top-18 right-5 flex w-56 translate-y-2 flex-col gap-2 rounded-md bg-white px-4 py-3 text-xl text-[#ccc9c9] opacity-0 shadow-lg transition-all duration-500 z-10"
        >
          <div class="group flex cursor-pointer items-center gap-4 border-b border-[#ccc9c9]">
            <div
              class="size-8 transition-all duration-200 group-hover:size-10 group-hover:duration-200"
            >
              <img
                src="@/public/icons8-user-settings-32 (2).png"
                alt="user-setting"
                class="size-full"
              />
            </div>
            <p
              class="py-2 transition-all duration-200 group-hover:border-[#8352A5] group-hover:text-2xl group-hover:duration-200"
            >
              Profile
            </p>
          </div>
          <div class="group flex cursor-pointer items-center gap-2">
            <div
              class="size-6 transition-all duration-200 group-hover:size-8 group-hover:duration-200"
            >
              <img src="@/public/icons8-sign-out-16.png" alt="user-setting" class="size-full" />
            </div>
            <p class="py-2 transition-all duration-200 hover:text-2xl hover:duration-200">
              Deconnexion
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
const countstore = useCounterStore();
const dash1 = computed(() => countstore.dash1);
const dash2 = computed(() => countstore.dash2);
const dash3 = computed(() => countstore.dash3);
const dash4 = computed(() => countstore.dash4);
const connect = computed(() => countstore.connect);
const connect2 = computed(() => countstore.connect2);
const connect3 = computed(() => countstore.connect3);
const inputdash1 = useTemplateRef("inputdash1");
const inputdash2 = useTemplateRef("inputdash2");
const inputdash3 = useTemplateRef("inputdash3");
const inputdash4 = useTemplateRef("inputdash4");
const userpp = useTemplateRef("user-pp");
const usersetting = useTemplateRef("user-setting");
const authStore = useAuthStore()

// Propriété calculée pour vérifier si l'utilisateur est admin
const isAdmin = computed(() => {
  return authStore.user && authStore.user.role === "admin"
})

// Propriété calculée pour vérifier si l'utilisateur est un utilisateur normal
const isUser = computed(() => {
  return authStore.user && authStore.user.role === "user"
})


const conditionalclass = computed(() => {
  if (dash1.value === true) {
    inputdash1.value?.classList.add("after:w-4.5");
  } else {
    inputdash1.value?.classList.remove("after:w-4.5");
  }
  if (dash2.value === true) {
    inputdash2.value?.classList.add("after:w-4.5");
  } else {
    inputdash2.value?.classList.remove("after:w-4.5");
  }
});

const selectdash1 = () => {
  if (dash2.value === true) {
    countstore.changedash2();
  }
  if (dash1.value === false) {
    countstore.changedash1();
  }
};
const selectdash2 = () => {
  if (dash1.value === true) {
    countstore.changedash1();
  }
  if (dash2.value === false) {
    countstore.changedash2();
  }
};
const useroption = () => {
  if (usersetting.value?.classList.contains("invisible")) {
    usersetting.value?.classList.remove("invisible");
    usersetting.value?.classList.remove("opacity-0");
    usersetting.value?.classList.remove("translate-y-2");
    usersetting.value?.classList.remove("transition-all");
    usersetting.value?.classList.remove("duration-500");
    usersetting.value?.classList.add("visible");
    usersetting.value?.classList.add("opacity-100");
    usersetting.value?.classList.add("translate-y-0");
    usersetting.value?.classList.add("transition-all");
    usersetting.value?.classList.add("duration-500");
  } else {
    usersetting.value?.classList.remove("visible");
    usersetting.value?.classList.remove("opacity-100");
    usersetting.value?.classList.remove("translate-y-0");
    usersetting.value?.classList.remove("transition-all");
    usersetting.value?.classList.remove("duration-500");
    usersetting.value?.classList.add("invisible");
    usersetting.value?.classList.add("opacity-0");
    usersetting.value?.classList.add("translate-y-2");
    usersetting.value?.classList.add("transition-all");
    usersetting.value?.classList.add("duration-500");
  }
};
onMounted(() => {

  // useGsap.to(".header-connection", {
  //     autoAlpha: 1, // Rend visible et ajuste l'opacité
  //     y: 0, // Remet la carte à sa position normale
  //     duration: 1, 
  //     ease: "power2.out"
  //   }
  // );

});
</script>
