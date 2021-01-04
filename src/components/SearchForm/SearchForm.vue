<template>
  <div class="py-40 bg-indigo-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center">
        <h2
          class="text-base text-indigo-600 font-semibold tracking-wide uppercase"
        >
          Κανε την αναζητηση σου
        </h2>
        <p class="mt-2 max-w-2xl text-xl text-gray-500 mx-auto">
          Βρες τώρα το προϊόν που επιθυμείς στο κοντινότερο κατάστημα με ένα
          κλικ.
        </p>
      </div>
      <div class="mt-10">
        <div class="grid grid-cols-12">
          <div class="col-span-2">
            <div class="flex flex-col">
              <div class="">
                <h1
                  class="block mt-1 text-lg leading-tight font-medium text-black"
                >
                  Περιοχές
                </h1>
                <div
                  v-for="municipality in municipalities"
                  :key="municipality.id"
                >
                  <label class="inline-flex items-center mt-3">
                    <input
                      class="form-checkbox h-5 w-5 text-blue-600"
                      type="checkbox"
                      v-model="selectedMunicipality"
                      :value="municipality.id"
                    /><span class="ml-2 text-gray-700">{{
                      municipality.name
                    }}</span>
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
          <div class="col-span-10">
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
            <div class="text-center">
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
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import db from "@/firebase/init";
import CartShop from "./CartShop/CartShop";

export default {
  components: {
    CartShop,
  },
  data() {
    return {
      municipalities: [],
      shops: [],
      products: [],
      selectedMunicipality: [],
      selectedProduct: [],
      page: 1,
      total: 0,
      pages: 0,
      perPage: 3,
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
        .limit(this.perPage)
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
    loadMunicipalities() {
      db.collection("municipalities")
        .get()
        .then((snapshot) => {
          snapshot.docs.forEach((doc) => {
            let municipality = doc.data();
            this.municipalities.push(municipality);
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
  },
  mounted() {
    this.loadShops();
    this.loadMunicipalities();
    this.loadProducts();
  },
  computed: {
    filteredShops: function () {
      if (
        this.selectedMunicipality.length === 0 &&
        this.selectedProduct.length === 0
      ) {
        return this.shops;
      } else if (
        this.selectedProduct.length != 0 ||
        this.selectedMunicipality.length != 0
      ) {
        return this.shops
          .filter((item) => {
            return item.products.some((item) => {
              return this.selectedProduct.includes(item.id);
            });
          })
          .filter((item) => this.selectedMunicipality.includes(item.region_id));
      } else if (
        this.selectedProduct.length === 0 &&
        this.selectedMunicipality.length != 0
      ) {
        return this.shops
          .filter((item) => {
            return item.products.some((item) => {
              return this.selectedProduct.includes(item.id);
            });
          })
          .filter((item) => this.selectedMunicipality.includes(item.region_id));
      } else if (
        this.selectedProduct.length != 0 &&
        this.selectedMunicipality.length === 0
      ) {
        return this.shops
          .filter((item) => {
            return item.products.some((item) => {
              return this.selectedProduct.includes(item.id);
            });
          })
          .filter((item) => this.selectedMunicipality.includes(item.region_id));
      }
    },
  },
};
</script>