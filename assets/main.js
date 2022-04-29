// any CSS you import will output into a single css file (app.css in this case)

/**
 * Initial css file
 * EMPTY
 */

/**
 * Initial JS vendor file
 */

/**
 * Initial CSS vendor file
 */

/**
 * Initial scss file
 */
import "./styles/scss/app.scss";

/**
 * Initial js file
 */
// import Code from "./styles/js/code.js";

/**
 * Initialisation of VUE 3
 */
import { createApp } from "vue";
import DigitalWlfApp from "./DigitalWlfApp";
import router from "./router";
import axios from "axios";
import VueAxios from "vue-axios";
import store from "./store";

createApp(DigitalWlfApp)
  .use(store)
  .use(router)
  .use(VueAxios, axios)
  .mount("#app");
