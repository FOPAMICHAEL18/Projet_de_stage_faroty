<template>
  <div class="flex w-200 flex-col gap-3 rounded-2xl border border-[#ccc9c9] px-7 pt-4 pb-4">
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
      <div
        class="group flex cursor-pointer flex-row items-center gap-2"
        v-if="props.message1 === 'Demandes'"
      >
        <p class="text-[#5C7CFA] duration-200 group-hover:-translate-x-1 group-hover:duration-200">
          voir plus
        </p>
        <div class="size-6 duration-200 group-hover:translate-x-1 group-hover:duration-200">
          <img src="@/public/icons8-arrow-64 (1).png" alt="arrow" class="size-full" />
        </div>
      </div>
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

  onMounted(() => {
    if (props.message1 === "Offres") {
      reft.value?.classList.add("text-[#8352A5]");
    }
    if (props.message1 === "Demandes") {
      reft.value?.classList.add("text-[#5C7CFA]");
    }
    if (props.message1 === "Candidatures") {
      reft.value?.classList.add("text-[#FAF852]");
    }
    if (props.message1 === "Entretien") {
      reft.value?.classList.add("text-[#FA5252]");
    }
  });
</script>
