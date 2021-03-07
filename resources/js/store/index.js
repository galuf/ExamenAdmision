import Vue from "vue";
import Vuex from "vuex";

Vue.use(Vuex);

export default new Vuex.Store({
    state: {
        temporizador: false,
        finalizo: false
    },
    mutations: {
        CAMBIA_TEMPORIZADOR(state, cambia) {
            state.temporizador = cambia;
        },
        CAMBIA_FIN(state, cambia) {
            state.finalizo = cambia;
        }
    }
});
