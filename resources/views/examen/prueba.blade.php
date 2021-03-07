@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="p-5 bg-danger">
    <h1>{{$examen->nombre}}</h1>
  </div>
    <div v-if='!this.$store.state.temporizador && !this.$store.state.finalizo'>
      <h3>Instrucciones</h3>
      <p>Antes de dar el examen lea las instrucciones: 
        atentamente Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet eos, minima, vitae molestias labore eius nesciunt itaque impedit animi totam, voluptatibus dolor incidunt odio odit laboriosam sapiente ut. Fugiat, ut.</p>
      <button v-on:click="()=>this.$store.commit('CAMBIA_TEMPORIZADOR',true)">Dar examen</button>
    </div>
    <div v-else>
    <temporizador deadline="{{ $examen->tiempo }}" ></temporizador>
    <div class="row bg-primary">
        <div class="col-3 overflow-auto tarjeta nav1">
          <div class="a">
            <h1>Tarjeta de respuestas</h1>
          </div>
          <!-- Radio Button Module -->
          <div class="rb-box">
            <form method="POST" action=" {{route('examen.calificar')}}" enctype="multipart/form-data" novalidate>
              @csrf
              <input type="hidden" name="id" value="{{$examen->id}}">
              <div v-show="!this.$store.state.finalizo">
                @for($i=1;$i<=$examen->preguntas;$i++)
                    <tarjeta-respuesta preg="{{$i}}"></tarjeta-respuesta>
                @endfor
              </div>
              <div v-show="this.$store.state.finalizo">
                El Examen a finalizado
              </div>
              <button>Calificar</button>
            </form>
          </div>

        </div>
        <div class="col-9 overflow-auto tarjeta nav1">

            <div class="container my-4">
              <div class="preg">
                <img class="img-fluid" src="/img/pregunta1.png" alt="Foto de Sacha">
              </div>
            </div>
            <div class="container my-4">
              <div class="preg">
                <img class="img-fluid" src="/img/pregunta1.png" alt="Foto de Sacha">
              </div>
            </div>
            <div class="container my-4">
              <div class="preg">
                <img class="img-fluid" src="/img/pregunta1.png" alt="Foto de Sacha">
              </div>
            </div>            <div class="container my-4">
              <div class="preg">
                <img class="img-fluid" src="/img/pregunta1.png" alt="Foto de Sacha">
              </div>
            </div>
        </div>

    </div>
  </div>
</div>
@endsection
