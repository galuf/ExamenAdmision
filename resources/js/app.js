/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import VueSweetAlert2 from "vue-sweetalert2";

require("./bootstrap");

window.Vue = require("vue");

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
Vue.use(VueSweetAlert2);

Vue.component("temporizador", require("./components/Temporizador.vue").default);

Vue.component(
    "subir-respuesta",
    require("./components/SubirRespuesta.vue").default
);
Vue.component(
    "resolver-examen",
    require("./components/ResolverExamen.vue").default
);
Vue.component(
    "tarjeta-respuesta",
    require("./components/TarjetaRespuesta.vue").default
);
Vue.component(
    "tarjeta-admin",
    require("./components/TarjetaAdmin.vue").default
);
Vue.component("barras", require("./components/Barras.vue").default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import store from "./store";

const app = new Vue({
    el: "#app",
    store
});
