<template>
  <Hero />
  <WhyUs />
  <About />
  <Services />
  <Testimonial />
</template>

<script>
import Hero from "../components/hero.vue";
import WhyUs from "../components/why-us.vue";
import About from "../components/about.vue";
import Services from "../components/services.vue";
import Testimonial from "../components/testimonial.vue";

export default {
  name: "Index",
  components: {
    Hero,
    WhyUs,
    About,
    Services,
    Testimonial,
  },
};
</script>

<style></style>
