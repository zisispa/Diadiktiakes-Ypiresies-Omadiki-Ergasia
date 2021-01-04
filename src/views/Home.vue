<template>
  <div>
    <Hero />
    <Info />
    <Services />
    <SearchForm />
    <Footer />
  </div>
</template>

<script>
import Hero from "@/components/Hero";
import Info from "@/components/Info";
import Services from "@/components/Services/Services";
import SearchForm from "@/components/SearchForm/SearchForm";
import Footer from "@/components/Footer";

export default {
  components: {
    Hero,
    Info,
    Services,
    SearchForm,
    Footer,
  },
};
</script>