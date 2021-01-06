<template>
  <div class="py-44">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <main
        class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28"
      >
        <div class="flex justify-center text-center">
          <h1
            class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl"
          >
            <span class=""
              >Επέλεξε το προϊόν που επιθυμείς και την περιοχή σου</span
            >
          </h1>
        </div>
        <div class="mt-5 sm:mt-8 flex justify-center flex-col sm:flex-row">
          <div class="rounded-md shadow">
            <a
              href="#info"
              v-smooth-scroll="{
                duration: 1000,
                offset: -50,
              }"
              class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base uppercase font-medium rounded-xl text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10"
            >
              Μαθε περισσοτερα
            </a>
          </div>
          <div class="mt-3 sm:mt-0 sm:ml-3">
            <a
              href="#search"
              v-smooth-scroll="{
                duration: 1000,
                offset: -50,
              }"
              class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base uppercase font-medium rounded-xl text-indigo-700 bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-10"
            >
              Αναζητηση
            </a>
          </div>
        </div>
      </main>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style>
</style>