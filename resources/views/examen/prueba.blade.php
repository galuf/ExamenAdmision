@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-3 overflow-auto tarjeta nav1">

          <div class="a">
            <h1>Tarjeta de respuestas</h1>
          </div>

          <!-- Radio Button Module -->
          <div class="rb-box">
            @for($i=1;$i<=10;$i++)
                <tarjeta-respuesta preg="{{$i}}"></tarjeta-respuesta>
            @endfor
          </div>

        </div>
        <div class="col-9 overflow-auto tarjeta nav1">

            <div class="container my-4">
              <div class="preg">
                <img class="img-fluid" src="img/pregunta1.png" alt="Foto de Sacha">
              </div>

              <div class="preg">
                <img class="img-fluid" src="img/pregunta1.png" alt="Foto de Sacha">
              </div>

              <div class="preg">
                <img class="img-fluid" src="img/pregunta1.png" alt="Foto de Sacha">
              </div>

              <div class="preg">
                <img class="img-fluid" src="img/pregunta1.png" alt="Foto de Sacha">
              </div>

              <div class="preg">
                <img class="img-fluid" src="img/pregunta1.png" alt="Foto de Sacha">
              </div>

              <div class="preg">
                <img class="img-fluid" src="img/pregunta1.png" alt="Foto de Sacha">
              </div>
            </div>
        </div>

    </div>
</div>
@endsection
