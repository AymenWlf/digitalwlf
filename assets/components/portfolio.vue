<template>
  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">
      <div class="section-title">
        <h2 data-aos="fade-up">Nos Projets</h2>
        <p data-aos="fade-up">
          Les projets ci-dessous représentent les sites web rendu public
          réaliser par Digital WLF
        </p>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">Tous</li>
            <li data-filter=".filter-webApp">Application Web</li>
            <li data-filter=".filter-vitrine">Vitrine</li>
          </ul>
        </div>
      </div>

      <div
        class="row portfolio-container"
        data-aos="fade-up"
        data-aos-delay="200"
      >
        <a
          href="https://www.activlines-shipping.com"
          target="_blank"
          class="col-lg-6 col-md-6 portfolio-item filter-vitrine"
        >
          <img
            src="../../public_html/assets/img/Activlines-shipping-screenshot.png"
            class="img-fluid"
            alt=""
          />
          <div class="portfolio-info">
            <h4>ACTIVLINES-SHIPPING</h4>
            <p>
              ACTIV LINES SHIPPING est un international Freight Forwarder
              implanté au Maroc spécialisé dans le transport National et
              International ainsi que le Transit
            </p>
          </div>
        </a>

        <a
          href="http://aymenwlf.me"
          target="_blank"
          class="col-lg-6 col-md-6 portfolio-item filter-webApp"
        >
          <img
            src="../../public_html/assets/img/Mo9awalati-screenshot.png"
            class="img-fluid"
            alt=""
          />
          <div class="portfolio-info">
            <h4>MO9AWALATI</h4>
            <p>
              Mo9awalati est un projet gratuit Réaliser par le fondateur de
              DigitalWLF , dont le but est la gestion des projets, clients,
              tax... pour les auto-entrepreneurs Marocain
            </p>
          </div>
        </a>
      </div>
    </div>
  </section>
  <!-- End Portfolio Section -->
</template>

<script>
export default {
  name: "Portfolio",
};
</script>

<style></style>
