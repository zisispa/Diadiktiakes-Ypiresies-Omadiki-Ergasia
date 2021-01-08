<template>
  <div class="background-image">
    <div v-if="user" class="grid h-screen grid-cols-12 px-4 mx-auto">
      <div class="col-span-12 lg:col-span-3 my-5 md:mr-2 lg:mt-2">
        <div class="shadow overflow-hidden rounded-md p-5 bg-white">
          <div class="">
            <h3 class="text-lg font-medium leading-6 text-gray-900">
              Προσωπικές Πληροφοριες
            </h3>
            <p class="my-5 text-md font-medium text-gray-600">
              <i class="fas fa-user fa-lg text-indigo-600"></i>
              {{ user.fullname }}
            </p>
            <p class="my-5 text-md font-medium text-gray-600">
              <i class="fas fa-envelope fa-lg text-indigo-600"></i>
              {{ user.email }}
            </p>
            <p class="text-md font-medium text-gray-600">
              <i class="fas fa-map-marker-alt fa-lg text-indigo-600"></i>
              {{ user.region }}
            </p>
          </div>
        </div>
      </div>
      <div class="col-span-12 lg:col-span-9 lg:mt-2">
        <form @submit.prevent="handleSubmit">
          <div class="shadow overflow-hidden rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6">
                  <label
                    for="fullname"
                    class="block text-sm font-medium text-gray-700"
                    >Ονοματεπώνυμο</label
                  >
                  <input
                    type="text"
                    id="fullname"
                    required
                    v-model="user.fullname"
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                  />
                </div>

                <div class="col-span-6">
                  <label
                    for="email"
                    class="block text-sm font-medium text-gray-700"
                    >Email address</label
                  >
                  <input
                    type="email"
                    id="email"
                    required
                    v-model="user.email"
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                  />
                </div>

                <div class="col-span-6">
                  <label
                    for="region"
                    class="block text-sm font-medium text-gray-700"
                    >Περιοχή</label
                  >
                  <select
                    id="region"
                    v-model="selectRegion"
                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                  >
                    <option
                      :key="region.id"
                      :value="region.id"
                      v-for="region in regions"
                    >
                      {{ region.name }}
                    </option>
                  </select>
                </div>
              </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
              <button
                type="submit"
                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
              >
                Αποθήκευση
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
import db from "@/firebase/init";
import slugify from "slugify";
import firebase from "firebase/app";

export default {
  data() {
    return {
      user: null,
      selectRegion: null,
      slug: null,
      regions: [],
      userRegion: "",
    };
  },
  created() {
    let ref = db
      .collection("users")
      .where("slug", "==", this.$route.params.user_slug);

    ref.get().then((snapshot) => {
      snapshot.forEach((doc) => {
        this.user = doc.data();
        this.user.id = doc.id;
      });
    });
  },
  methods: {
    loadRegions() {
      db.collection("regions")
        .get()
        .then((snapshot) => {
          snapshot.docs.forEach((doc) => {
            let region = doc.data();
            this.regions.push(region);
          });
        });
    },
    handleSubmit() {
      this.slug = slugify(this.user.fullname, {
        replacement: "-",
        remove: /[$*_+~.()'"!\-:@]/g,
        lower: true,
      });

      db.collection("users")
        .doc(this.user.id)
        .set({
          fullname: this.user.fullname,
          email: this.user.email,
          slug: this.slug,
          region: this.selectRegion,
        })
        .then((docRef) => {
          this.$router.push({ name: "Home" });
        })
        .catch((error) => {
          console.error("Error adding employee: ", error);
        });
    },
  },
  mounted() {
    this.loadRegions();
  },
};
</script>

<style>
.background-image {
  background-image: url("../assets/background.jpg");
  background-repeat: no-repeat;
  background-size: cover;
}
</style>