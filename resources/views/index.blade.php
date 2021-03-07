@extends('layouts.app')

@section('content')
<div class="container">
    <div class="justify-content-center">
        <h1>Simulacros de Admision</h1>
        
        @guest

        @else
          @if (Auth::user()->role === 2)
            <a 
              class="btn btn-primary m-5"
              href=" {{route('examen.create')}} "> 
              Crear Examen
            </a>
        @endif
        @endguest

        @foreach($ex_f as $examen)
          <div class="p-4 border">
            <h3>{{$examen['titulo']}}</h3>
            <a href="{{route('examen.seleccion',
                      ['examen'=>$examen])}}">
                      Dar Examen</a>
          </div>
        @endforeach

        {{-- @foreach($examenes as $examen)
          <div class="p-4 border">
            <h3>{{$examen->nombre}}</h3>
            <a href="{{route('examen.show',['examen'=>$examen->id])}}">Dar Examen</a>
          </div>
        @endforeach --}}
    </div>
</div>
@endsection