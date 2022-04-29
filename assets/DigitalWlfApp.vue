<template>
  <div>
    <TopBar />
    <Header />
    <router-view />
    <Footer />
  </div>
</template>

<script>
import TopBar from "./components/topbar.vue";
import Header from "./components/header.vue";
import Footer from "./components/footer.vue";
export default {
  name: "DigitalWlfApp",
  components: {
    TopBar,
    Header,
    Footer,
  },
  computed: {},
  data() {
    return {};
  },
};
</script>
