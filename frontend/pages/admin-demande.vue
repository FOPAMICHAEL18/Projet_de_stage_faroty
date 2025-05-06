<template>
  <div class="flex flex-col items-center justify-center">
    <div class="flex w-18/20 flex-col gap-30 py-30">
      <div class="flex flex-row items-center gap-100">
        <MiniTitle message1="Liste des demandes" />
        <form>
          <input
            type="text"
            name="search"
            class="h-12 w-180 rounded-md border border-[#ccc9c9] p-2"
          />
          <div class="absolute bottom-186.5 left-380 size-10">
            <img src="@/public/icons8-search-250.png" alt="search" class="size-full" />
          </div>
        </form>
      </div>
      <div class="flex flex-wrap gap-10">
        <AdminDemandeCase
          v-for="demande in demandes"
          :message1="demande.title"
          :message2="demande.content"
        />
      </div>
    </div>
  </div>
</template>

<script setup>
  const demandes = [
    { id: 1, title: "Besoin d'un Developpeur Frontend", content: "Departement informatique" },
    { id: 2, title: "Besoin d'un Développeur IA", content: "Departement informatique" },
    { id: 3, title: "Besoin d'un comptable", content: "Departement des finances" },
  ];
</script>
