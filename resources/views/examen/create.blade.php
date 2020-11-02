@extends('layouts.app')

@section('content')
<h2 class="text-center mb-5">Crear Examen</h2>

  <div class="row justify-content-center mt-5">
    <div class="col-md-8">
      <form method="POST" action=" {{route('examen.store')}}" enctype="multipart/form-data" novalidate>
        @csrf

        <div class="form-group">
          <label for="universidad">Universidad</label>

          <select name="universidad"
                  class="form-control @error('universidad') is-invalid @enderror"
                  id="universidad">
            <option value="">-- Seleccione --</option>
            @foreach ($universidades as $universidad)
              <option value=" {{ $universidad->id}} "
                      {{old('universidad')==$universidad->id ? 'selected' : ''}}>
                      {{$universidad->nombre}}
              </option>
            @endforeach
          </select>

          @error('universidad')
            <span class="invalid-feedback d-block" role="alert">
              <strong> {{$message}} </strong>
            </span>
          @enderror
        </div>

        <div class="form-group">
            <label for="admision">Admision</label>

            <select name="admision"
                    class="form-control @error('admision') is-invalid @enderror"
                    id="admision">
                <option value="">-- Seleccione --</option>
                @foreach ($admisions as $admision)
                    <option value=" {{ $admision->id}} "
                                    {{old('admision')==$admision->id ? 'selected' : ''}}>
                                    {{$admision->nombre}}
                    </option>
                @endforeach
            </select>

            @error('admision')
                <span class="invalid-feedback d-block" role="alert">
                    <strong> {{$message}} </strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="area">Area</label>

            <select name="area"
                    class="form-control @error('area') is-invalid @enderror"
                    id="area">
                <option value="">-- Seleccione --</option>
                @foreach ($areas as $area)
                    <option value=" {{ $area->id}} "
                                    {{old('admision')==$area->id ? 'selected' : ''}}>
                                    {{$area->nombre}}
                    </option>
                @endforeach
            </select>

            @error('area')
                <span class="invalid-feedback d-block" role="alert">
                    <strong> {{$message}} </strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="tipo">Tipo</label>

            <select name="tipo"
                    class="form-control @error('tipo') is-invalid @enderror"
                    id="tipo">
                <option value="">-- Seleccione --</option>
                @foreach ($tipos as $tipo)
                    <option value=" {{ $tipo->id}} "
                                    {{old('admision')==$tipo->id ? 'selected' : ''}}>
                                    {{$tipo->tipo}}
                    </option>
                @endforeach
            </select>

            @error('tipo')
                <span class="invalid-feedback d-block" role="alert">
                    <strong> {{$message}} </strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="Crear">
        </div>

      </form>
    </div>
  </div>

@endsection
