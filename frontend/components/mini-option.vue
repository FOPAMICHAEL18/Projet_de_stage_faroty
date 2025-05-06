<template>
  <div class="flex cursor-pointer flex-row items-center gap-10" @click="change">
    <div
      ref="bar"
      class="invisible h-10 w-2 rounded-xs bg-[#8352A5]"
      :class="conditionalclass"
    ></div>
    <div class="text-2xl">{{ message1 }}</div>
  </div>
</template>

<script setup>
  const countstore = useCounterStore();
  const option1 = computed(() => countstore.option1);
  const option2 = computed(() => countstore.option2);
  const option3 = computed(() => countstore.option3);
  const option4 = computed(() => countstore.option4);
  const bar = useTemplateRef("bar");
  const props = defineProps({
    message1: "string",
  });

  const addstyles = () => {
    bar.value?.classList.remove("invisible");
    bar.value?.classList.add("visible");
  };
  const removestyles = () => {
    bar.value?.classList.remove("visible");
    bar.value?.classList.add("invisible");
  };
  const conditionalclass = computed(() => {
    if (option1.value === true && props.message1 === "Compte") {
      addstyles();
    } else {
      removestyles();
    }
    switch (props.message1) {
      case "Compte":
        if (option1.value === true) {
          addstyles();
        } else {
          removestyles();
        }
        break;
      case "Mot de passe":
        if (option2.value === true) {
          addstyles();
        } else {
          removestyles();
        }
        break;
      case "Email":
        if (option3.value === true) {
          addstyles();
        } else {
          removestyles();
        }
        break;
      case "Poste":
        if (option4.value === true) {
          addstyles();
        } else {
          removestyles();
        }
        break;
    }
  });
  const change = () => {
    if (props.message1 === "Compte") {
      if (option1.value === false) {
        countstore.changeoption1();
      }
      if (option2.value === true) {
        countstore.changeoption2();
      }
      if (option3.value === true) {
        countstore.changeoption3();
      }
      if (option4.value === true) {
        countstore.changeoption4();
      }
    }
    if (props.message1 === "Mot de passe") {
      if (option1.value === true) {
        countstore.changeoption1();
      }
      if (option2.value === false) {
        countstore.changeoption2();
      }
      if (option3.value === true) {
        countstore.changeoption3();
      }
      if (option4.value === true) {
        countstore.changeoption4();
      }
    }
    if (props.message1 === "Email") {
      if (option1.value === true) {
        countstore.changeoption1();
      }
      if (option2.value === true) {
        countstore.changeoption2();
      }
      if (option3.value === false) {
        countstore.changeoption3();
      }
      if (option4.value === true) {
        countstore.changeoption4();
      }
    }
    if (props.message1 === "Poste") {
      if (option1.value === true) {
        countstore.changeoption1();
      }
      if (option2.value === true) {
        countstore.changeoption2();
      }
      if (option3.value === true) {
        countstore.changeoption3();
      }
      if (option4.value === false) {
        countstore.changeoption4();
      }
    }
  };
</script>
