<template>
  <div
    class="w-auto bg-white rounded-xl shadow-md overflow-hidden mx-auto my-5 md:m-3"
  >
    <div class="md:flex md:justify-between">
      <div class="md:flex md:justify-between">
        <div class="">
          <img
            class="h-48 sm:h-full w-full md:w-48"
            :src="image"
            alt="Man looking at item at a store"
          />
        </div>
        <div class="py-5 sm:pl-5">
          <div
            class="uppercase tracking-wide text-sm text-indigo-500 font-semibold"
          >
            {{ name }}
          </div>
          <p
            class="block mt-1 text-lg leading-tight font-medium text-black md:max-w-md"
          >
            {{ address }}
          </p>
          <p class="mt-2 text-gray-500">
            <i class="fas fa-phone text-indigo-600"></i>
            {{ phone }}
          </p>
          <p class="text-gray-500">
            <i class="fas fa-user-alt text-red-500"></i>
            {{ visitors }} επισκέπτες
          </p>
        </div>
      </div>
      <div class="px-5 pb-5 sm:py-5 md:mx-5">
        <p class="block text-lg leading-tight font-medium text-black pb-2">
          Προϊόντα
        </p>
        <ul>
          <li v-for="product in products" :key="product.id">
            <p class="block text-md leading-tight font-medium text-black">
              {{ product.name }}
              <span class="text-gray-500">{{ product.quantity }} κ.</span>
            </p>
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["name", "image", "address", "phone", "visitors", "products"],
};
</script>