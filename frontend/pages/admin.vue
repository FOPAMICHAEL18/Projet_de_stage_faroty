<template>
  <div class="flex flex-col items-center justify-center">
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
</template>

<script setup>
  const stats = [
    { id: 1, number: 1, title: "Offres", content: "Nombre d'offres" },
    { id: 2, number: 2, title: "Demandes", content: "Nombre de demandes" },
    { id: 3, number: 100, title: "Candidatures", content: "Nombre de candidatures" },
    { id: 4, number: 4, title: "Entretien", content: "Nombre d'entretiens" },
  ];
  const countstore = useCounterStore();
</script>
