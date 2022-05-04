<template>
  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials">
    <div class="container position-relative" data-aos="fade-up">
      <swiper
        :autoplay="{ delay: 5000, disableOnInteraction: false }"
        :pagination="{
          clickable: true,
          type: 'bullets',
          el: '.swiper-pagination',
        }"
      >
        <swiper-slide>
          <div class="testimonial-item">
            <img
              class="testimonial-img"
              src="https://i.imgur.com/GoE6PHc.jpg"
            />
            <h3>Nabil Bouabdalli</h3>
            <h4>Directeur général de Activlines-shipping</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Je tenais à vous exprimer mes remerciements les plus sincères pour
              la qualité du travail que vous avez effectué pour notre société
              ACTIV LINES SHIPPING Votre travail m'a apporté une très grande
              satisfaction.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </swiper-slide>
      </swiper>
      <div class="swiper-pagination"></div>
    </div>
  </section>
  <!-- End Testimonials Section -->
</template>

<script>
import { Swiper, SwiperSlide } from "swiper/vue";
import SwiperCore, { Autoplay, Pagination } from "swiper";
import "swiper/css";
import "swiper/css/autoplay";
import "swiper/css/pagination";

// install Swiper components
SwiperCore.use([Pagination, Autoplay]);

export default {
  name: "Testimonial",
  components: {
    Swiper,
    SwiperSlide,
  },
  setup() {
    const OnSwiper = (swiper) => {
      const params = swiper.params;
      params.speed = 400;
      params.loop = true;
      return {
        OnSwiper,
        modules: [Autoplay, Pagination],
      };
    };
  },
};
</script>

<style></style>
