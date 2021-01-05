<template>
  <div class="flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
      <div>
        <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
          Καλώς ήρθες, Κάνε Είσοδο!
        </h2>
        <p class="mt-2 text-center text-sm text-gray-600">
          To SearchAid είναι μια πρωτότυπη εφαρμογή που εντοπίζει το προϊόν της
          επιλογής σου στα πλησιέστερα καταστήματα.
        </p>
      </div>
      <form class="mt-8 space-y-6" @submit.prevent="onSubmitLogin">
        <input type="hidden" name="remember" value="true" />
        <div class="rounded-md shadow-sm -space-y-px">
          <div class="relative mb-3 text-gray-600 focus-within:text-gray-400">
            <span
              class="absolute inset-y-0 left-0 flex items-center pl-2 focus:text-indigo-500"
            >
              <i class="fas fa-user"></i>
            </span>
            <input
              type="email"
              v-model="email"
              class="rounded-none block w-full py-2 pl-10 border border-gray-300 text-gray-900 rounded-t-md focus:outline-none focus:border-indigo-500 focus:z-10 sm:text-sm"
              placeholder="Email..."
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
              placeholder="Password..."
            />
          </div>
        </div>

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

        <div>
          <button
            type="submit"
            class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
          >
            <span class="absolute left-0 inset-y-0 flex items-center pl-3">
              <!-- Heroicon name: lock-closed -->
              <svg
                class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
                fill="currentColor"
                aria-hidden="true"
              >
                <path
                  fill-rule="evenodd"
                  d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                  clip-rule="evenodd"
                />
              </svg>
            </span>
            Sign in
          </button>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
import firebase from "firebase";

export default {
  data() {
    return {
      email: "",
      password: "",
    };
  },
  methods: {
    onSubmitLogin() {
      firebase
        .auth()
        .signInWithEmailAndPassword(this.email, this.password)
        .then(
          (user) => {
            this.$router.go({ name: "Home" });
          },
          (err) => {
            alert(err.message);
          }
        );
    },
  },
};
</script>

<style>
</style>