<template>
  <div class="background-image">
    <div
      class="flex h-screen justify-center items-center py-12 px-4 sm:px-6 lg:px-8"
    >
      <div class="max-w-md w-full bg-gray-100 p-10 rounded-md shadow-md">
        <div>
          <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
            Καλώς ήρθες πίσω, Κάνε Είσοδο!
          </h2>
          <p class="mt-2 text-center text-sm text-gray-600">
            To SearchAid είναι μια πρωτότυπη εφαρμογή που εντοπίζει το προϊόν
            της επιλογής σου στα πλησιέστερα καταστήματα.
          </p>
        </div>
        <form class="mt-8 space-y-6" @submit.prevent="onSubmitLogin">
          <input type="hidden" name="remember" value="true" />
          <div class="rounded-md shadow-sm -space-y-px">
            <div class="relative mb-3 text-gray-600 focus-within:text-gray-400">
              <span
                class="absolute inset-y-0 left-0 flex items-center pl-2 focus:text-indigo-500"
              >
                <i class="fas fa-envelope"></i>
              </span>
              <input
                type="email"
                v-model="email"
                class="rounded-none block w-full py-2 pl-10 border border-gray-300 text-gray-900 rounded-t-md focus:outline-none focus:border-indigo-500 focus:z-10 sm:text-sm"
                placeholder="Email"
              />
            </div>
            <div class="relative mb-3 text-gray-600 focus-within:text-gray-400">
              <span
                class="absolute inset-y-0 left-0 flex items-center pl-2 focus:text-indigo-500"
              >
                <i class="fas fa-key"></i>
              </span>
              <input
                type="password"
                v-model="password"
                class="rounded-none block w-full py-2 pl-10 border border-gray-300 text-gray-900 rounded-t-md focus:outline-none focus:border-indigo-500 focus:z-10 sm:text-sm"
                placeholder="Password"
              />
            </div>
          </div>
          <div>
            <button
              type="submit"
              class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
            >
              <div v-if="loading">
                <span class="flex items-center">
                  <clip-loader color="white" size="25px"></clip-loader>
                </span>
              </div>
              <div v-else>Είσοδος</div>
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
import firebase from "firebase/app";
import ClipLoader from "vue-spinner/src/ClipLoader.vue";

export default {
  data() {
    return {
      email: "",
      password: "",
      loading: false,
    };
  },
  components: {
    ClipLoader,
  },
  methods: {
    onSubmitLogin() {
      this.loading = true;
      firebase
        .auth()
        .signInWithEmailAndPassword(this.email, this.password)
        .then(
          (user) => {
            this.$router.push({ name: "Home" });
          },
          (err) => {
            alert(err.message);
          }
        )
        .finally(() => {
          this.loading = false;
        });
    },
  },
};
</script>

<style>
.background-image {
  background-image: url("../assets/background-login-register.jpg");
  background-repeat: no-repeat;
  background-size: cover;
}
</style>

<!-- <div class="flex items-center justify-between">
          <div class="flex items-center">
            <input
              id="remember_me"
              name="remember_me"
              type="checkbox"
              class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded"
            />
            <label for="remember_me" class="ml-2 block text-sm text-gray-900">
              Remember me
            </label>
          </div>

          <div class="text-sm">
            <a
              href="#"
              class="font-medium text-indigo-600 hover:text-indigo-500"
            >
              Forgot your password?
            </a>
          </div>
        </div> -->