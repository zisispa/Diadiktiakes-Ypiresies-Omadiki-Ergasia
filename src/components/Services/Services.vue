<template>
  <!-- This example requires Tailwind CSS v2.0+ -->
  <div class="py-40 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center">
        <h2
          class="text-base text-indigo-600 font-semibold tracking-wide uppercase"
        >
          Υπηρεσιες
        </h2>
        <!-- <p
          class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl"
        >
          A better way to send money
        </p>
        <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
          Lorem ipsum dolor sit amet consect adipisicing elit. Possimus magnam
          voluptatum cupiditate veritatis in accusamus quisquam.
        </p> -->
      </div>

      <div class="mt-10">
        <div
          class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-6 lg:grid-cols-12 gap-4"
        >
          <div class="col-span-3">
            <ServiceItem
              heading="Η τοποθεσία σου"
              content="Επέλεξε την περιοχή σου."
              icon="location"
            >
              <i slot="icon" class="fas fa-search-location fa-2x"></i>
            </ServiceItem>
          </div>
          <div class="col-span-3">
            <ServiceItem
              heading="Το προϊόν σου"
              content="Επέλεξε το προϊόν που επιθυμείς απο τη λίστα."
              icon="basket"
              ><i slot="icon" class="fas fa-shopping-basket fa-2x"></i>
            </ServiceItem>
          </div>
          <div class="col-span-3">
            <ServiceItem
              heading="Eπισκέπτες"
              content="Ενημερώσου για τους επισκέπτες που έχει το κατάστημα σε real
                time."
              icon="friends"
              ><i slot="icon" class="fas fa-user-friends fa-2x"></i>
            </ServiceItem>
          </div>
          <div class="col-span-3">
            <ServiceItem
              heading="Απόθεμα προϊόντος"
              content="Ενήμερωσου για το απόθεμα προϊόντος στο κατάστημα της επιλογής
                σου."
              icon="info-circle"
              ><i slot="icon" class="fas fa-info-circle fa-2x"></i>
            </ServiceItem>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import ServiceItem from "./ServiceItem/ServiceItem";

export default {
  components: {
    ServiceItem,
  },
};
</script>

<style>
</style>