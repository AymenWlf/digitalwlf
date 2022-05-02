<template>
  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
      <ol>
        <li>
          <router-link to="/#header">{{ firstPageName }}</router-link>
        </li>
        <li v-if="secondPageName">
          <router-link :to="secondRoute">{{ secondPageName }}</router-link>
        </li>
        <li>{{ pageName }}</li>
      </ol>
      <h2>{{ pageName }}</h2>
    </div>
  </section>
  <!-- End Breadcrumbs -->
</template>

<script>
export default {
  name: "Breadcrumbs",
  props: {
    pageName: String,
    firstPageName: String,
    secondPageName: String,
    secondRoute: String,
  },
};
</script>

<style></style>
