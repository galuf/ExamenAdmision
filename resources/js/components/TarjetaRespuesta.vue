<template>
    <div id="rb-1" class="rb">
        <span class="text-secondary small"> {{this.preg + '.'}} </span>
        <div class="rb-tab" data-value="1">
            <div class="rb-spot" @click="marca">
                <span class="rb-txt">A</span>
            </div>
        </div>
        <div class="rb-tab" data-value="2">
            <div class="rb-spot">
                <span class="rb-txt">B</span>
            </div>
        </div>
        <div class="rb-tab" data-value="3">
            <div class="rb-spot">
                <span class="rb-txt">C</span>
            </div>
        </div>
        <div class="rb-tab" data-value="4">
            <div class="rb-spot">
                <span class="rb-txt">D</span>
            </div>
        </div>
        <div class="rb-tab" data-value="5">
            <div class="rb-spot">
                <span class="rb-txt">E</span>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props:['preg'],
    mounted(){
        console.log(this.preg)
    },
    methods: {
        marca(e){
            if(e.target.innerText === 'A'){
                e.target.parent.classList.add('bg-primary')
            }
        }
    },
}
</script>
