<template>
  <div class="flex flex-col items-center justify-center">
    <div class="flex w-18/20 flex-col gap-30 py-30">
      <form action="" class="flex flex-col gap-30">
        <div class="flex flex-col gap-14">
          <MiniTitle message1="Description du poste" />
          <div class="flex flex-col gap-10">
            <div class="flex flex-col gap-1 text-xl">
              <label for="metier">Metier</label>
              <input
                type="text"
                name="metier"
                id="metier"
                class="h-14 w-107 rounded-sm border border-[#ccc9c9] p-2"
              />
            </div>
            <div class="flex flex-col gap-1 text-xl">
              <label for="contrat">Contrat</label>
              <input
                type="text"
                name="contrat"
                id="contrat"
                class="h-14 w-107 rounded-sm border border-[#ccc9c9] p-2"
              />
            </div>
            <div class="flex flex-col gap-1 text-xl">
              <label for="description">Description de la mission</label>
              <textarea
                name="description"
                id="description"
                class="h-60 w-160 rounded-sm border border-[#ccc9c9] p-2"
              />
            </div>
            <div class="flex flex-col gap-1 text-xl">
              <label for="profil">Profil</label>
              <textarea
                name="profil"
                id="profil"
                class="h-50 w-160 rounded-sm border border-[#ccc9c9] p-2"
              />
            </div>
          </div>
          <MiniTitle message1="Detail sur le poste" />
          <div class="flex flex-col gap-10">
            <div class="flex flex-col gap-1 text-xl">
              <label for="localisation">localisation du poste</label>
              <input
                type="text"
                name="localisation"
                id="localisation"
                class="h-14 w-107 rounded-sm border border-[#ccc9c9] p-2"
              />
            </div>
            <div class="flex flex-col gap-1 text-xl">
              <label for="duree">Duree du contrat en mois</label>
              <input
                type="text"
                name="duree"
                id="duree"
                class="h-14 w-107 rounded-sm border border-[#ccc9c9] p-2"
              />
            </div>
          </div>
          <MiniTitle message1="Criteres candidats" />
          <div class="flex flex-col gap-10">
            <div class="flex flex-col gap-1 text-xl">
              <label for="etude">Niveau d'etude min.requis</label>
              <input
                type="text"
                name="etude"
                id="etude"
                class="h-14 w-107 rounded-sm border border-[#ccc9c9] p-2"
              />
            </div>
            <div class="flex flex-col gap-1 text-xl">
              <label for="experience">Niveau d'experience min.requis</label>
              <input
                type="text"
                name="experience"
                id="experience"
                class="h-14 w-107 rounded-sm border border-[#ccc9c9] p-2"
              />
            </div>
            <div class="flex flex-col gap-1 text-xl">
              <label for="emploi">Niveau d'emploi</label>
              <input
                type="text"
                name="emploi"
                id="emploi"
                class="h-14 w-107 rounded-sm border border-[#ccc9c9] p-2"
              />
            </div>
            <div class="flex flex-col gap-1 text-xl">
              <label for="langue">Langue</label>
              <input
                type="text"
                name="langue"
                id="langue"
                class="h-14 w-107 rounded-sm border border-[#ccc9c9] p-2"
              />
            </div>
          </div>
          <MiniTitle message1="Date d'echeance" />
          <div class="flex flex-col gap-1 text-xl">
            <label for="echeance">Date d'echeance</label>
            <input
              type="text"
              name="echeance"
              id="echeance"
              class="h-14 w-107 rounded-sm border border-[#ccc9c9] p-2"
            />
          </div>
        </div>
        <div>
          <button
            class="mt-10 w-50 rounded-sm bg-[#8352A5] px-4 py-2 text-center text-3xl text-white"
          >
            Valider
          </button>
        </div>
      </form>
    </div>
  </div>
</template>
