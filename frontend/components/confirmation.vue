<template>
    <form action="" class="flex flex-col gap-7 rounded-xl border border-gray-300 px-12 pt-10 pb-10 bg-white">
        <div class="flex flex-col gap-4">
            <label for="data" class="text-xl">Entrer votre nouveau {{ message1 }}</label>
            <input type="text" name="data" id="data" class="h-14 w-full rounded-sm border border-gray-300 p-2 focus:outline focus:outline-[#8352A5] hover:outline-[#8352A5] hover:outline cursor-pointer" />
        </div>
        <div class="flex flex-row items-center gap-4">
            <div class="w-50 rounded-sm bg-[#8352A5] px-2 py-3 text-lg text-white cursor-pointer text-center" @click="change">annuler</div>
            <button class="w-50 rounded-sm bg-[#8352A5] px-2 py-3 text-lg text-white cursor-pointer">Valider</button>
        </div>
    </form>
</template>

<script setup>
const props = defineProps({
    message1: "string",
});
const countstore = useCounterStore();
const visible = computed(() => countstore.visible);

const change = () => {
  countstore.visibility();
  console.log(visible)
};
</script>