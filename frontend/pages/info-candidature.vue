<template>
  <div class="flex flex-col items-center justify-center">
    <div class="flex w-18/20 flex-col gap-30 py-30">
      <div class="flex w-5/10 flex-col gap-25">
        <div class="flex flex-col gap-8">
          <MiniTitle message1="Informations personnelles" />
          <div class="flex flex-col gap-5 text-2xl">
            <h1 class="font-semibold">Nom et prenom</h1>
            <p class="ml-1">Lorem ipsum vst csvtv</p>
          </div>
          <div class="flex flex-col gap-5 text-2xl">
            <h1 class="font-semibold">Email</h1>
            <p class="ml-1">Lorem ipsum vst csvtv</p>
          </div>
          <div class="flex flex-col gap-5 text-2xl">
            <h1 class="font-semibold">Tel</h1>
            <p class="ml-1">Lorem ipsum vst csvtv</p>
          </div>
          <div class="flex flex-col gap-5 text-2xl">
            <h1 class="font-semibold">Adresse</h1>
            <p class="ml-1">Lorem ipsum vst csvtv</p>
          </div>
        </div>
        <div class="flex flex-col gap-15">
          <MiniTitle message1="Documents de candidature" />
          <div class="flex flex-wrap gap-10">
            <div
              class="flex w-60 items-center justify-center rounded-sm bg-[#8352A5] px-4 py-3 text-xl text-white"
            >
              CV
            </div>
            <div
              class="flex w-60 items-center justify-center rounded-sm bg-[#8352A5] px-4 py-3 text-xl text-white"
            >
              photo-cni
            </div>
            <div
              class="flex w-60 items-center justify-center rounded-sm bg-[#8352A5] px-4 py-3 text-xl text-white"
            >
              lettre-motivation
            </div>
            <div
              class="flex w-60 items-center justify-center rounded-sm bg-[#8352A5] px-4 py-3 text-xl text-white"
            >
              plan localisation
            </div>
            <div
              class="flex w-60 items-center justify-center rounded-sm bg-[#8352A5] px-4 py-3 text-xl text-white"
            >
              lettre-recommandation
            </div>
          </div>
        </div>
        <div class="mt-10 flex flex-row gap-8">
          <div
            class="flex w-60 items-center justify-center rounded-sm bg-red-500 px-4 py-3 text-xl text-white"
          >
            Accepter
          </div>
          <div
            class="flex w-60 items-center justify-center rounded-sm bg-green-500 px-4 py-3 text-xl text-white"
          >
            Rejeter
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
