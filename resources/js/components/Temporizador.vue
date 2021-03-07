<template>
    <div>
        <div class="text-center" v-if="currentTime">
            <span>
                <span class="hours">{{ hours | formatTime }}</span
                >:</span
            >
            <span>
                <span class="minuts">{{ minutes | formatTime }}</span
                >: <span class="sec">{{ seconds | formatTime }}</span></span
            ><br />
        </div>
    </div>
</template>

<script>
import store from "../store";
export default {
    store,
    props: {
        deadline: {
            type: String,
            required: true
        },
        speed: {
            type: Number,
            default: 1000
        }
    },
    data() {
        return {
            currentTime: 0
        };
    },
    mounted() {
        let hora = this.deadline.split(":");
        this.currentTime = Number(hora[0]) * 60 * 60 + Number(hora[1]) * 60;
        setTimeout(this.countdown, 1000);
    },
    computed: {
        seconds() {
            return Math.floor(this.currentTime % 60);
        },
        minutes() {
            return Math.floor((this.currentTime / 60) % 60);
        },
        hours() {
            return Math.floor(this.currentTime / (60 * 60));
        }
    },
    filters: {
        formatTime(value) {
            if (value < 10) {
                return "0" + value;
            }
            return value;
        }
    },
    methods: {
        countdown() {
            this.currentTime = this.currentTime - 1;
            if (this.currentTime > 0) {
                setTimeout(this.countdown, this.speed);
            } else {
                this.currentTime = null;
                console.log("Se acabo el tiempo");
                this.$store.commit("CAMBIA_TEMPORIZADOR", false);
                this.$store.commit("CAMBIA_FIN", true);
            }
        }
    }
};
</script>

<style>
.hours {
    border: 2px solid black;
    padding: 5px;
    font-weight: bold;
}
.minuts {
    border: 2px solid black;
    padding: 5px;
    font-weight: bold;
}
.sec {
    border: 2px solid black;
    padding: 5px;
    font-weight: bold;
}
</style>
