
@extends('layouts.app')

@section('content')
<h2 class="text-center mb-5">Respuestas a las preguntas</h2>

  <div class="row justify-content-center mt-5">
    <div class="col-md-8">

        @for ($i=1;$i<=$examen->admision->preguntas;$i++)
            <subir-respuesta examen={{$examen->id}}
                             pregunta={{$i}}
                             area_id= {{$examen->area_id}} >
            </subir-respuesta>
        @endfor

        <div class="form-group">
            <a href="/" class="btn btn-primary">Principal</a>
        </div>

    </div>
  </div>

@endsection
