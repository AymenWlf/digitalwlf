<template>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <a href="index.html" class="mx-2"
          ><img src="assets/img/Logo.png" alt="" class="img-fluid"
        /></a>
        <h1><a href="#">Digital WLF</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li>
            <a
              class="nav-link scrollto active"
              @click="toggleNav()"
              href="#hero"
              >Acceuil</a
            >
          </li>
          <li>
            <a class="nav-link scrollto" @click="toggleNav()" href="#about"
              >A propos</a
            >
          </li>
          <li>
            <a class="nav-link scrollto" @click="toggleNav()" href="#services"
              >Services</a
            >
          </li>
          <li>
            <a class="nav-link scrollto" @click="toggleNav()" href="#portfolio"
              >Nos Projets</a
            >
          </li>
          <li>
            <a class="nav-link scrollto" @click="toggleNav()" href="#pricing"
              >Tarifs</a
            >
          </li>
          <!-- <li class="dropdown">
            <a href="#"
              ><span>Drop Down</span> <i class="bi bi-chevron-down"></i
            ></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown">
                <a href="#"
                  ><span>Deep Drop Down</span>
                  <i class="bi bi-chevron-right"></i
                ></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <li>
            <a class="nav-link scrollto" @click="toggleNav()" href="#contact"
              >Contactez Nous</a
            >
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle" @click="toggleNav()"></i>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->
</template>

<script>
export default {
  name: "header",
  mounted() {
    let selectHeader = document.querySelector("#header");
    if (selectHeader) {
      let headerOffset = selectHeader.offsetTop;
      let nextElement = selectHeader.nextElementSibling;
      const headerFixed = () => {
        if (headerOffset - window.scrollY <= 0) {
          selectHeader.classList.add("fixed-top");
          nextElement.classList.add("scrolled-offset");
        } else {
          selectHeader.classList.remove("fixed-top");
          nextElement.classList.remove("scrolled-offset");
        }
      };
      window.addEventListener("load", headerFixed);
      document.addEventListener("scroll", headerFixed);
    }

    let navbarlinks = document.querySelectorAll("#navbar .scrollto");
    const navbarlinksActive = () => {
      let position = window.scrollY + 200;
      navbarlinks.forEach((navbarlink) => {
        if (!navbarlink.hash) return;
        let section = document.querySelector(navbarlink.hash);
        if (!section) return;
        if (
          position >= section.offsetTop &&
          position <= section.offsetTop + section.offsetHeight
        ) {
          navbarlink.classList.add("active");
        } else {
          navbarlink.classList.remove("active");
        }
      });
    };
    window.addEventListener("load", navbarlinksActive);
    document.addEventListener("scroll", navbarlinksActive);
  },
  methods: {
    toggleNav: function () {
      if (window.matchMedia("(max-width: 991px)").matches) {
        document.querySelector(".navbar").classList.toggle("navbar-mobile");

        document
          .querySelector(".mobile-nav-toggle")
          .classList.toggle("bi-list");
        document.querySelector(".mobile-nav-toggle").classList.toggle("bi-x");
      }
    },
  },
};
</script>

<style></style>
