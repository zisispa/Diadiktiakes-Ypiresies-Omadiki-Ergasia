<template>
  <div
    class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl m-2"
  >
    <div class="md:flex">
      <div class="md:flex-shrink-0">
        <img
          class="h-96 w-full object-cover md:w-48"
          :src="image"
          alt="Man looking at item at a store"
        />
      </div>
      <div class="py-8 pl-8 pr-5">
        <div
          class="uppercase tracking-wide text-sm text-indigo-500 font-semibold"
        >
          {{ name }}
        </div>
        <p class="block mt-1 text-lg leading-tight font-medium text-black">
          {{ address }}
        </p>
        <p class="mt-2 text-gray-500">
          <i class="fas fa-phone text-indigo-600"></i>
          {{ phone }}
        </p>
        <p class="mt-2 text-gray-500">
          <i class="fas fa-user-alt text-red-500"></i>
          {{ visitors }} επισκέπτες
        </p>
        <div class="pt-5">
          <p
            class="block mt-1 text-lg leading-tight font-medium text-black pb-2"
          >
            Προϊόντα
          </p>
          <ul>
            <li v-for="product in products" :key="product.id">
              <p
                class="block mt-1 text-md leading-tight font-medium text-black"
              >
                {{ product.name }}
                <span class="text-gray-500">{{ product.quantity }} κ.</span>
              </p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { BadgerAccordion, BadgerAccordionItem } from "vue-badger-accordion";
export default {
  props: ["name", "image", "address", "phone", "visitors", "products"],
  components: {
    BadgerAccordion,
    BadgerAccordionItem,
  },
};
</script>

<style>
</style>