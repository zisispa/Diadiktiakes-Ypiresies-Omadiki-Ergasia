<template>
  <div id="app">
    <Navbar v-if="hide" />
    <router-view />
  </div>
</template>

<script>
import Navbar from "@/components/Navbar";

export default {
  components: {
    Navbar,
  },
  computed: {
    hide() {
      return this.$route.name !== "Login" || this.$route.name !== "SignUp";
    },
  },
};
</script>