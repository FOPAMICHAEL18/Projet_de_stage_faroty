<template>
  <div class="flex flex-col items-center justify-center">
    <div class="flex w-18/20 flex-col gap-15 py-20">
      <div class="flex items-center justify-center">
        <p
          class="text-4xl text-[#8352A5] after:mt-4 after:ml-0 after:block after:h-2 after:w-106 after:rounded-xs after:bg-[#8352A5]"
        >
          Deposer votre candidature
        </p>
      </div>
      <form action="" class="flex flex-col gap-20">
        <div class="flex flex-col gap-14">
          <MiniTitle message1="Vos informations personnelles" />
          <div class="flex flex-col gap-10 pl-11">
            <div class="flex flex-col gap-1 text-xl">
              <label for="name">Nom et prenom</label>
              <input
                type="text"
                name="name"
                id="name"
                class="h-14 w-107 rounded-sm border border-[#ccc9c9] p-2"
              />
            </div>
            <div class="flex flex-col gap-1 text-xl">
              <label for="email">Email</label>
              <input
                type="email"
                name="email"
                id="email"
                class="h-14 w-107 rounded-sm border border-[#ccc9c9] p-2"
              />
            </div>
            <div class="flex flex-col gap-1 text-xl">
              <label for="phone">Telephone</label>
              <input
                type="tel"
                name="phone"
                id="phone"
                class="h-14 w-107 rounded-sm border border-[#ccc9c9] p-2"
              />
            </div>
            <div class="flex flex-col gap-1 text-xl">
              <label for="address">Adresse</label>
              <input
                type="text"
                name="address"
                id="address"
                class="h-14 w-107 rounded-sm border border-[#ccc9c9] p-2"
              />
            </div>
          </div>
          <MiniTitle message1="Vos documents de candidature" />
          <div class="flex w-7/10 flex-wrap gap-13">
            <div class="flex flex-col gap-3 pl-11 text-xl">
              <p>Deposer votre CV</p>
              <label
                for="cv"
                class="flex h-35 w-107 cursor-pointer items-center justify-center rounded-lg border border-[#ccc9c9] p-2 text-center"
                >selectionner un fichier ou glisser-deposer</label
              >
              <input type="file" name="cv" id="cv" class="hidden" />
            </div>
            <div class="flex flex-col gap-3 pl-11 text-xl">
              <p>Deposer votre Photo-cni</p>
              <label
                for="cv"
                class="flex h-35 w-107 cursor-pointer items-center justify-center rounded-lg border border-[#ccc9c9] p-2 text-center"
                >selectionner un fichier ou glisser-deposer</label
              >
              <input type="file" name="cv" id="cv" class="hidden" />
            </div>
            <div class="flex flex-col gap-3 pl-11 text-xl">
              <p>Deposer votre plan de localisation</p>
              <label
                for="cv"
                class="flex h-35 w-107 cursor-pointer items-center justify-center rounded-lg border border-[#ccc9c9] p-2 text-center"
                >selectionner un fichier ou glisser-deposer</label
              >
              <input type="file" name="cv" id="cv" class="hidden" />
            </div>
            <div class="flex flex-col gap-3 pl-11 text-xl">
              <p>Deposer votre lettre de motivation</p>
              <label
                for="cv"
                class="flex h-35 w-107 cursor-pointer items-center justify-center rounded-lg border border-[#ccc9c9] p-2 text-center"
                >selectionner un fichier ou glisser-deposer</label
              >
              <input type="file" name="cv" id="cv" class="hidden" />
            </div>
            <div class="flex flex-col gap-3 pl-11 text-xl">
              <p>Deposer votre lettre de recommandation</p>
              <label
                for="cv"
                class="flex h-35 w-107 cursor-pointer items-center justify-center rounded-lg border border-[#ccc9c9] p-2 text-center"
                >selectionner un fichier ou glisser-deposer</label
              >
              <input type="file" name="cv" id="cv" class="hidden" />
            </div>
          </div>
        </div>
        <div class="flex w-250 flex-row items-center justify-between pl-11">
          <div class="mt-10 w-40 rounded-sm bg-[#8352A5] px-1 py-2 text-center text-xl text-white">
            Precedent
          </div>
          <button
            class="mt-10 w-40 rounded-sm bg-[#8352A5] px-1 py-2 text-center text-xl text-white"
          >
            Postuler
          </button>
        </div>
      </form>
    </div>
  </div>
</template>
