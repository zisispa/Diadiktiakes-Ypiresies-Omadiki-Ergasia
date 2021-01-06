<template>
  <div class="bg-indigo-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between flex-col text-center md:flex-row p-5">
        <div
          class="text-lg font-bold text-white mb-2 md:mb-0 hover:text-gray-300"
        >
          <a href="/">SearchAid</a>
        </div>
        <div class="text-md font-normal text-white mb-2 md:mb-0">
          Copyright © 2020
        </div>
        <div class="text-md font-normal text-white mb-2 md:mb-0">
          <ul class="flex flex-row justify-between">
            <li class="mr-1 hover:text-gray-300 cursor-pointer">
              <a
                href="#info"
                v-smooth-scroll="{
                  duration: 1000,
                  offset: -50,
                }"
                >ΠΛΗΡΟΦΟΡΙΕΣ</a
              >
            </li>
            <li class="mx-1 hover:text-gray-300 cursor-pointer">
              <a
                href="#services"
                v-smooth-scroll="{
                  duration: 1000,
                  offset: -50,
                }"
                >ΥΠΗΡΕΣΙΑ</a
              >
            </li>
            <li class="ml-1 hover:text-gray-300 cursor-pointer">
              <a
                href="#search"
                v-smooth-scroll="{
                  duration: 1000,
                  offset: -50,
                }"
                >ΑΝΑΖΗΤΗΣΗ</a
              >
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style>
</style>