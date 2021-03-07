
@extends('layouts.app')

@section('content')
<h2 class="text-center mb-5">Respuestas a las preguntas</h2>

  <div class="row justify-content-center mt-5">
    <div class="col-md-8">

        <form method="POST" action=" {{route('respuestas.store')}}" enctype="multipart/form-data" novalidate>
          @csrf
          <input type="hidden" name="id" value="{{$examen->id}}">
          @for($i=1;$i<=$examen->preguntas;$i++)
              <tarjeta-admin preg="{{$i}}" id="{{$examen->id}}"></tarjeta-admin>
          @endfor
          <button>Subir</button>
        </form>

        <!-- @for ($i=1;$i<=$examen->preguntas;$i++)
            <subir-respuesta examen={{$examen->id}}
                            pregunta={{$i}}
                            area_id= {{$examen->area_id}} >
            </subir-respuesta>
        @endfor -->

        <div class="form-group">
            <a href="/" class="btn btn-primary">Principal</a>
        </div>

    </div>
  </div>
@endsection