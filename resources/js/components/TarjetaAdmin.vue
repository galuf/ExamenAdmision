<template>
    <div :id="'e' + this.id + '-adm-rb-' + this.preg" class="rb_adm">
        <input
            type="hidden"
            :id="'adm-resp' + this.preg"
            :name="'adm-resp' + this.preg"
            v-model="alternativa"
        />
        <span class="text-secondary small"> {{ this.preg + "." }} </span>
        <div class="rb-tab" data-value="1">
            <div
                :id="this.preg + '-a'"
                class="rb-spot"
                @click="marca('a', $event)"
            >
                <span class="rb-txt">A</span>
            </div>
        </div>
        <div class="rb-tab" data-value="2">
            <div
                :id="this.preg + '-b'"
                class="rb-spot"
                @click="marca('b', $event)"
            >
                <span class="rb-txt">B</span>
            </div>
        </div>
        <div class="rb-tab" data-value="3">
            <div
                :id="this.preg + '-c'"
                class="rb-spot"
                @click="marca('c', $event)"
            >
                <span class="rb-txt">C</span>
            </div>
        </div>
        <div class="rb-tab" data-value="4">
            <div
                :id="this.preg + '-d'"
                class="rb-spot"
                @click="marca('d', $event)"
            >
                <span class="rb-txt">D</span>
            </div>
        </div>
        <div class="rb-tab" data-value="5">
            <div
                :id="this.preg + '-e'"
                class="rb-spot"
                @click="marca('e', $event)"
            >
                <span class="rb-txt">E</span>
            </div>
        </div>
        <select
            class="rb-tab"
            :name="'adm-prg' + this.preg"
            v-model="asigSelec"
        >
            <option value=""> Asignatura</option>
            <option
                :value="asignatura.id"
                v-for="asignatura in asignaturas"
                :key="asignatura.id"
            >
                {{ asignatura.nombre }}
            </option>
        </select>
    </div>
</template>

<script>
export default {
    props: ["preg", "id"],
    data: function() {
        return {
            alternativa: "x",
            asignaturas: "",
            asigSelec: ""
        };
    },
    mounted() {
        axios
            .get("/asignaturas")
            .then(res => {
                //console.log(res.data)
                this.asignaturas = res.data;
                //console.log(this.asignaturas)
            })
            .catch(err => {
                console.log(err);
            });
        //console.log(this.preg);
    },
    methods: {
        marca(letra, e) {
            let elemento = `#e${this.id}-adm-rb-${this.preg} .rb-spot`;
            if (e.target.classList.contains("rb-txt")) {
                let marcado = document.querySelectorAll(elemento);
                let marcado_array = [...marcado];
                marcado_array.forEach(element => {
                    return element.classList.remove("marcado");
                });
                if (this.alternativa !== letra) {
                    e.target.parentElement.classList.add("marcado");
                    this.alternativa = letra;
                } else {
                    this.alternativa = "x";
                }
                //console.log(this.alternativa);
            } else {
                let marcado = document.querySelectorAll(elemento);
                let marcado_array = [...marcado];
                marcado_array.forEach(element => {
                    return element.classList.remove("marcado");
                });
                if (this.alternativa !== letra) {
                    e.target.classList.add("marcado");
                    this.alternativa = letra;
                } else {
                    this.alternativa = "x";
                }
                //console.log(this.alternativa);
            }
            console.log(
                `Seleccionado ${this.alternativa} + asignatura ${this.asigSelec}`
            );
        }
    }
};
</script>

<style>
.marcado {
    background-color: gray;
}
</style>
