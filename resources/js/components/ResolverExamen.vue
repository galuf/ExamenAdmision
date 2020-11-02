<template>
      <div class="row justify-content-center mt-5">
    <div class="col-md-8">
      <form>
        <div class="form-group">
          <label :for="'pregunta_'+this.pregunta">Pregunta {{this.pregunta}}</label>

          <select :name="'pregunta_'+this.pregunta"
                  class="form-control"
                  :id="'pregunta_'+this.pregunta"
                  v-model="resSelec">
            <option value="">-- Seleccione --</option>
              <option value="a">
                A
              </option>
              <option value="b">
                B
              </option>
              <option value="c">
                C
              </option>
              <option value="d">
                D
              </option>
              <option value="e">
                E
              </option>
          </select>
        </div>
        <div class="form-group">
            <label for="">Asignaturas</label>
            <select class="form-control" v-model="asigSelec">
                <option value="">--Seleccione</option>
                <option :value="asignatura.id" v-for="asignatura in asignaturas" :key="asignatura.id">
                    {{asignatura.nombre}}
                </option>
            </select>
        </div>

        <div class="form-group">
          <input type="submit" class="btn btn-primary" :value="mensaje"
                @click="subir">
        </div>

      </form>
    </div>
  </div>
</template>

<script>
export default {
    props: ['examen','pregunta','area_id'],
    data:function(){
        return {
            respuestas:{},
        }
    },
    methods:{
        subir: function(e){
            e.preventDefault();
            //console.log(`${this.examen} ${this.pregunta} ${this.area_id}`)
            axios.post('/respuestas',{
                'examen_id':this.examen,
                'asignatura_id':this.asigSelec,
                'respuesta': this.resSelec,
                'area_id':this.area_id,
                'pregunta':this.pregunta,
            }).then(res=>{
//                console.log(res)
                this.mensaje = 'Subido'
            }).catch(err=>{
                console.log(err)
            })
        }
    },
    mounted(){
        axios.get('/asignaturas')
            .then(res=>{
                //console.log(res.data)
                this.asignaturas = res.data
                //console.log(this.asignaturas)
            })
            .catch(err=>{
                console.log(err)
            })
        //console.log(` El examen es : ${this.examen} y la pregunta es: ${this.pregunta} `)
    }
}
</script>
