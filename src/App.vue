<template>
  <div>
    <Navbar v-if="['Home'].includes($route.name)" />
    <router-view />
  </div>
</template>

<script>
import Navbar from "@/components/Navbar";

export default {
  components: {
    Navbar,
  },
};
</script>