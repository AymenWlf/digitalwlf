<template>
  <Breadcrumbs
    :pageName="breadcrumbs.route"
    :firstPageName="breadcrumbs.firstRoute"
  />

  <!-- ======= Quote Section ======= -->
  <section id="quote" class="contact">
    <div class="container">
      <div class="section-title">
        <h2 data-aos="fade-up">
          Demander un <span class="color-orange">Devis</span>
        </h2>
        <p data-aos="fade-up">
          Remplissez le formulaire afin que nous puissons en savoir plus sur
          votre futur projet
        </p>
      </div>

      <div
        class="row justify-content-center"
        data-aos="fade-up"
        data-aos-delay="300"
      >
        <div class="col-xl-12 col-lg-12 mt-4">
          <form class="php-email-form quote-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <label for="name">Votre Nom</label>
                <input
                  type="text"
                  name="name"
                  class="form-control"
                  id="name"
                  required
                />
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <label for="name">Votre Email</label>
                <input
                  type="email"
                  class="form-control"
                  name="email"
                  id="email"
                  required
                />
              </div>
            </div>
            <div class="form-group mt-3">
              <label for="websiteType">Choisissez le type de site web</label>
              <input
                type="text"
                class="form-control"
                name="subject"
                id="subject"
                placeholder="Subject"
                required
              />
            </div>
            <div class="form-group mt-3">
              <textarea
                class="form-control"
                name="message"
                rows="5"
                placeholder="Message"
                required
              ></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">
                Your message has been sent. Thank you!
              </div>
            </div>
            <div class="text-center">
              <button type="submit">Send Message</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->
</template>

<script>
import Breadcrumbs from "../components/breadcrumbs.vue";
export default {
  name: "Quote",
  components: {
    Breadcrumbs,
  },
  data() {
    return {
      breadcrumbs: {
        route: "Devis",
        firstRoute: "Acceuil",
      },
    };
  },
};
</script>

<style lang="scss">
#quote {
  .quote-form {
    box-shadow: 0 0 0 #fff;
    padding: 0;
  }
}
</style>
