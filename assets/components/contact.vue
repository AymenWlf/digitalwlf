<template>
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">
      <div class="section-title">
        <h2 data-aos="fade-up">
          Contactez <span class="color-orange">Nous</span>
        </h2>
        <p data-aos="fade-up">
          Nous sommes disponible à tous moment pour répondre à vos questions
          afin garantir votre satisfaction !
        </p>
      </div>

      <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 mt-4" data-aos="fade-up">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email</h3>
            <p>
              <a href="mailto:contact@aymenwlf.me">contact@aymenwlf.me</a>
            </p>
          </div>
        </div>
        <div
          class="col-xl-5 col-lg-6 mt-4"
          data-aos="fade-up"
          data-aos-delay="100"
        >
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Téléphone</h3>
            <p><a href="tel:064874083">06 14 87 40 83</a></p>
          </div>
        </div>
      </div>

      <div
        class="row justify-content-center"
        data-aos="fade-up"
        data-aos-delay="300"
      >
        <div class="col-xl-10 col-lg-12 mt-4">
          <form
            v-on:submit.prevent="submit"
            class="php-email-form"
            autocomplete="false"
          >
            <div class="row">
              <div class="col-md-6 form-group">
                <input
                  autocomplete="off"
                  type="text"
                  name="name"
                  v-bind:class="{
                    'form-control': true,
                    'is-invalid':
                      !validChamps(Datas.name) && Constraints.nameBlured,
                  }"
                  class="form-control"
                  id="name"
                  placeholder="Votre Nom"
                  required
                  v-model="Datas.name"
                  v-on:focus="reset()"
                  v-on:blur="Constraints.nameBlured = true"
                />
                <div class="invalid-feedback">
                  <span>Veuillez remplir ce champs</span>
                </div>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input
                  autocomplete="off"
                  type="email"
                  class="form-control"
                  v-bind:class="{
                    'form-control': true,
                    'is-invalid':
                      !validEmail(Datas.email) && Constraints.emailBlured,
                  }"
                  name="email"
                  id="email"
                  placeholder="Votre Email"
                  required
                  v-model="Datas.email"
                  v-on:focus="reset()"
                  v-on:blur="Constraints.emailBlured = true"
                />
                <div class="invalid-feedback">
                  <span>Une adresse email valide est requise !</span>
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <input
                autocomplete="off"
                type="text"
                class="form-control"
                v-bind:class="{
                  'form-control': true,
                  'is-invalid':
                    !validChamps(Datas.subject) && Constraints.subjectBlured,
                }"
                name="subject"
                id="subject"
                placeholder="Sujet"
                required
                v-model="Datas.subject"
                v-on:focus="reset()"
                v-on:blur="Constraints.subjectBlured = true"
              />
              <div class="invalid-feedback">
                <span>Veuillez remplir ce champs</span>
              </div>
            </div>
            <div class="form-group mt-3">
              <textarea
                autocomplete="off"
                v-bind:class="{
                  'form-control': true,
                  'is-invalid':
                    !validChamps(Datas.message) && Constraints.messageBlured,
                }"
                class="form-control"
                name="message"
                rows="5"
                placeholder="Message"
                required
                v-model="Datas.message"
                v-on:focus="reset()"
                v-on:blur="Constraints.messageBlured = true"
              ></textarea>
              <div class="invalid-feedback">
                <span>Veuillez remplir ce champs</span>
              </div>
            </div>
            <div class="my-3 text-center">
              <div v-if="Constraints.success" class="sent-message">
                <p class="mb-0">
                  Votre message a été envoyer avec succès, Merci !
                </p>
              </div>
              <div v-if="Constraints.error" class="error-message">
                <p class="mb-0">
                  Erreur! Veuillez resaisir votre message, et si cela persist
                  actualiser la page et réessayer à nouveau !
                </p>
              </div>
            </div>
            <div class="text-center">
              <button
                v-if="Constraints.loading"
                type="submit"
                name="submit"
                disabled
              >
                <span
                  class="spinner-border spinner-border-sm"
                  role="status"
                  aria-hidden="true"
                ></span>
                Loading...
              </button>
              <button
                v-if="
                  !Constraints.loading &&
                  !Constraints.success &&
                  !Constraints.error
                "
                type="submit"
                name="submit"
              >
                Envoyer le message
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->
</template>

<script>
import axios from "axios";
export default {
  name: "Contact",
  data() {
    return {
      Constraints: {
        success: false,
        error: false,
        loading: false,
        emailBlured: false,
        nameBlured: false,
        subjectBlured: false,
        messageBlured: false,
      },
      Datas: {
        name: "",
        email: "",
        subject: "",
        message: "",
      },
    };
  },
  methods: {
    submit: function () {
      let self = this;
      self.Constraints.loading = true;
      axios
        .post("/contact/", this.Datas)
        .then((res) => {
          self.Constraints.success = true;
        })
        .catch((error) => {
          self.Constraints.error = true;
          // error.response.status Check status code
        })
        .finally(() => {
          self.Constraints.loading = false;
          self.resetForm();
          //Perform action in always
        });
    },
    reset: function () {
      this.Constraints.success = false;
      this.Constraints.error = false;
    },
    resetForm: function () {
      this.Datas.name = "";
      this.Datas.email = "";
      this.Datas.message = "";
      this.Datas.subject = "";
      this.Constraints.emailBlured = false;
      this.Constraints.nameBlured = false;
      this.Constraints.subjectBlured = false;
      this.Constraints.messageBlured = false;
    },
    validEmail: function (email) {
      var re = /(.+)@(.+){2,}\.(.+){2,}/;
      if (re.test(email.toLowerCase())) {
        return true;
      }
    },
    validChamps: function (champs) {
      if (champs.length > 0) {
        return true;
      }
    },
  },
};
</script>

<style></style>
