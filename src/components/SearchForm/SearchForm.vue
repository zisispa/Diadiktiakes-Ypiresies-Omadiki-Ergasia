<template>
  <div id="search" class="py-40 bg-indigo-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center">
        <h2
          class="text-base text-indigo-600 font-semibold tracking-wide uppercase"
        >
          Κανε την αναζητηση σου
        </h2>
        <p class="mt-2 max-w-2xl text-xl text-gray-500 mx-auto">
          Βρες τώρα το προϊόν που επιθυμείς στο κοντινότερο κατάστημα με ένα
          κλικ. Για να χρησιμοποιήσεις την εφαρμογή πρέπει να συνδεθείς ή να
          δημιουργήσεις λογαριασμό άμα δεν έχεις.
        </p>
      </div>
      <div class="mt-10">
        <div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-12">
          <div class="col-span-1 md:col-span-2">
            <div
              class="flex flex-col shadow overflow-hidden p-3 rounded-md bg-white"
            >
              <div class="">
                <h1
                  class="block mt-1 text-lg leading-tight font-medium text-black"
                >
                  Περιοχές
                </h1>
                <div v-for="region in regions" :key="region.id">
                  <label class="inline-flex items-center mt-3">
                    <input
                      class="form-checkbox h-5 w-5 text-blue-600"
                      type="checkbox"
                      v-model="selectedRegion"
                      :value="region.id"
                      checked="checkIfRegion(region.id)"
                    /><span class="ml-2 text-gray-700">{{ region.name }}</span>
                  </label>
                </div>
              </div>
              <div class="mt-5">
                <h1
                  class="block mt-1 text-lg leading-tight font-medium text-black"
                >
                  Προιόντα
                </h1>
                <div v-for="product in products" :key="product.id">
                  <label class="inline-flex items-center mt-3">
                    <input
                      class="form-checkbox h-5 w-5 text-blue-600"
                      type="checkbox"
                      v-model="selectedProduct"
                      :value="product.id"
                    /><span class="ml-2 text-gray-700">{{ product.name }}</span>
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-span-1 md:col-span-10">
            <div v-for="shop in filteredShops" :key="shop.id">
              <CartShop
                :name="shop.name"
                :image="shop.image"
                :address="shop.address"
                :phone="shop.phone"
                :visitors="shop.visitors"
                :products="shop.products"
              />
            </div>
            <!-- <div class="text-center">
              <nav
                class="relative z-0 inline-flex shadow-sm -space-x-px"
                aria-label="Pagination"
              >
                <a
                  class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50"
                >
                  <span class="sr-only">Previous</span>
                  <svg
                    class="h-5 w-5"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    aria-hidden="true"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                      clip-rule="evenodd"
                    />
                  </svg>
                </a>
                <div v-for="(t, index) in total" :key="index">
                  <button
                    class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50"
                    @click="onPageChange"
                  >
                    {{ t }}
                  </button>
                </div>
                <a
                  class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50"
                >
                  <span class="sr-only">Next</span>
                  <svg
                    class="h-5 w-5"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    aria-hidden="true"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                      clip-rule="evenodd"
                    />
                  </svg>
                </a>
              </nav>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import db from "@/firebase/init";
import CartShop from "./CartShop/CartShop";
import firebase from "firebase/app";

export default {
  components: {
    CartShop,
  },
  data() {
    return {
      regions: [],
      shops: [],
      products: [],
      selectedRegion: [],
      selectedProduct: [],
      page: 1,
      total: 0,
      pages: 0,
      perPage: 3,
      userMunicipality: null,
    };
  },
  methods: {
    loadShops() {
      db.collection("shops")
        .get()
        .then((snapshot) => {
          this.total = snapshot.size;
          this.page = Math.ceil(this.total / this.perPage);
        });

      db.collection("shops")

        .get()
        .then((snapshot) => {
          snapshot.docs.forEach((doc) => {
            let shop = doc.data();
            this.shops.push(shop);
          });
        });
    },
    onPageChange() {
      db.collection("shops")
        .limit(this.perPage)
        .startAfter(this.perPage * (this.page - 1))
        .get()
        .then((snapshot) => {
          this.shops = [];
          snapshot.docs.forEach((doc) => {
            let shop = doc.data();
            this.shops.push(shop);
          });
        });
    },
    loadRegions() {
      db.collection("regions")
        .get()
        .then((snapshot) => {
          snapshot.docs.forEach((doc) => {
            let municipality = doc.data();
            this.regions.push(municipality);
          });
        });
    },
    loadProducts() {
      db.collection("products")
        .get()
        .then((snapshot) => {
          snapshot.docs.forEach((doc) => {
            let product = doc.data();
            this.products.push(product);
          });
        });
    },
    loadUserMunicipalitie() {
      db.collection("users")
        .doc(firebase.auth().currentUser.uid)
        .get()
        .then((snapshot) => {
          this.userMunicipality = snapshot.data().municipalities;
        });
    },
    checkIfRegion(id) {
      if (id === this.userMunicipality) {
        return true;
      }
      return false;
    },
  },
  mounted() {
    this.loadShops();
    this.loadRegions();
    this.loadProducts();
    this.loadUserMunicipalitie();
  },
  computed: {
    filteredShops: function () {
      if (
        this.selectedRegion.length === 0 &&
        this.selectedProduct.length === 0
      ) {
        return this.shops;
      } else if (
        this.selectedProduct.length != 0 &&
        this.selectedRegion.length != 0
      ) {
        return this.shops
          .filter((item) => {
            return item.products.some((item) => {
              return this.selectedProduct.includes(item.id);
            });
          })
          .filter((item) => this.selectedRegion.includes(item.region_id));
      } else if (
        this.selectedProduct.length === 0 &&
        this.selectedRegion.length > 0
      ) {
        return this.shops.filter((item) =>
          this.selectedRegion.includes(item.region_id)
        );
      } else if (
        this.selectedProduct.length != 0 &&
        this.selectedRegion.length === 0
      ) {
        return this.shops.filter((item) => {
          return item.products.some((item) => {
            return this.selectedProduct.includes(item.id);
          });
        });
      }
    },
  },
};
</script>