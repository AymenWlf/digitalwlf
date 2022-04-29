<template>
  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div
      class="container d-flex justify-content-center justify-content-md-between"
    >
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center email"
          ><a href="mailto:contact@digitalwlf.com">contact@digitalwlf.com</a></i
        >
        <i class="bi bi-phone d-flex align-items-center ms-4 tel"
          ><a href="tel:064874083">06 14 87 40 83</a></i
        >
      </div>

      <div class="cta d-none d-md-flex align-items-center">
        <a href="#" class="scrollto">Demander un devis</a>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "topbar",
};
</script>

<style lang="scss">
@media screen and (max-width: 327px) {
  #topbar {
    height: 5rem;
    .contact-info {
      flex-direction: column;
      align-items: start !important;
      .email {
        margin-bottom: 0.7rem;
      }
      .tel {
        margin-left: 0 !important;
      }
    }
  }
}
</style>
