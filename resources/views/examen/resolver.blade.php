@extends('layouts.app')

@section('content')
<h2 class="text-center mb-5">Crear Examen</h2>

  <div class="row justify-content-center mt-5">
    <div class="col-md-8">
      <form method="POST" action=" {{route('examen.resultado')}}" enctype="multipart/form-data" novalidate>
        @csrf
        <input type="text" name="examen" id="" hidden value="{{$examen->id}}">
        @for ($i=1;$i<=$examen->admision->preguntas;$i++)
            <div class="form-group">
            <label for="{{'pregunta_'.$i}}"> {{'Pregunta '.$i}} </label>

            <select name="{{'pregunta_'.$i}}"
                    class="form-control"
                    id="{{'pregunta_'.$i}}">
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
        @endfor
        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="Calificar">
        </div>

      </form>
    </div>
  </div>

@endsection
