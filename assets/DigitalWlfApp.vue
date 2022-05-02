<template>
  <div>
    <TopBar />
    <Header />
    <router-view />
    <WhatsApp />
    <Footer />
  </div>
</template>

<script>
import TopBar from "./components/topbar.vue";
import Header from "./components/header.vue";
import Footer from "./components/footer.vue";
import WhatsApp from "./components/whatsapp.vue";
export default {
  name: "DigitalWlfApp",
  components: {
    TopBar,
    Header,
    Footer,
    WhatsApp,
  },
  computed: {},
  data() {
    return {};
  },
};
</script>
