<template>
  <div class="mx-auto mt-10">
    <div class="grid grid-cols-12">
      <div class="col-span-4">
        <div class="flex flex-col">
          <div class="m-2">
            <h1 class="font-bold">Περιοχές</h1>
            <div v-for="municipality in municipalities" :key="municipality.id">
              <input
                type="checkbox"
                v-model="selectedMunicipality"
                :value="municipality.id"
              />
              <label>
                {{ municipality.name }}
              </label>
            </div>
          </div>
          <div class="m-2">
            <h1 class="font-bold">Προιόντα</h1>
            <div v-for="product in products" :key="product.id">
              <input
                type="checkbox"
                v-model="selectedProduct"
                :value="product.id"
              />
              <label>
                {{ product.name }}
              </label>
            </div>
          </div>
        </div>
      </div>
      <div class="col-span-8">
        <div v-for="shop in filteredShops" :key="shop.id">
          <p>{{ shop.name }}</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import db from "@/firebase/init";

export default {
  name: "Home",
  data() {
    return {
      municipalities: [],
      shops: [],
      products: [],
      selectedMunicipality: [],
      selectedProduct: [],
    };
  },
  methods: {
    loadShops() {
      db.collection("shops")
        .get()
        .then((snapshot) => {
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