@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 px-4">
        <h1>Tu Resultado</h1>
        <barras></barras>
      </div>
      <div class="col-12 col-md-6 px-4">
        <h1>Resumen</h1>
        <table class="table table-sm table-light">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Caracteristicas</th>
              <th scope="col">Valores</th>
            </tr>
          </thead>
          <tbody>
            <tr class="table-info">
              <th scope="row">1</th>
              <td>Universidad: </td>
              <td> {{$universidad}} </td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Proceso de Admision: </td>
              <td> {{$admision}} </td>
            </tr>
            <tr class="table-info">
              <th scope="row">3</th>
              <td>Area: </td>
              <td> {{$area}} </td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>Estudiante:  </td>
              <td> {{$user}} </td>
            </tr>
            <tr class="table-info">
              <th scope="row">5</th>
              <td>Carrera: </td>
              <td> {{$carrera}}</td>
            </tr>
            <tr>
              <th scope="row">6</th>
              <td>Mi puntaje: </td>
              <td> {{$puntaje}} </td>
            </tr>
            <tr class="table-info">
              <th scope="row">7</th>
              <td>Puntaje Maximo Promedio: </td>
              <td> {{$maxIng}} </td>
            </tr>
            <tr>
              <th scope="row">8</th>
              <td>Puntaje Minimo Promedio: </td>
              <td> {{$minIng}} </td>
            </tr>
            <tr class="table-info">
              <th scope="row">9</th>
              <td>Probabilidad de Ingreso: </td>
              <td>
                @if($puntaje > $minIng && $puntaje < $maxIng)
                  {{ ($puntaje/$maxIng)*100 - 10 +'%'}}
                @else
                  @if($puntaje > $maxIng)
                    {{'95%, tienes altas posibilidades de ingresar. Felicitaciones!! '}}
                  @else
                    {{'50%, Tu puntaje no esta en el rango de Ingreso de tu carrera ' }} 
                  @endif 
                @endif
              </td>
            </tr>
          </tbody>
        </table>

        <p>Mensaje Segun porcentaje</p>

        
      </div>
    </div>

    <div class="mt-5">
      <h1>Compara tus resultados con otras carreras de tu area</h1>
      <form action="">
        <div class="form-row align-items-center">
          <label for="carrera">Selecciona una Escuela Profesional</label>
          <select class="form-control" name="carrera" id="carrera">
            <option value="1">Odontologia</option>
          </select>
          <button class="btn btn-primary">Muestra</button>
        </div>
      </form>
      <div>
        <div class="container mt-5">
          <div class="row">
            <div class="col-12 col-md-6 px-4">
              <h1>Tu Resultado</h1>
              <barras></barras>
            </div>
            <div class="col-12 col-md-6 px-4">
              <h1>Resumen</h1>
              <table class="table table-sm table-light">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Caracteristicas</th>
                    <th scope="col">Valores</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="table-info">
                    <th scope="row">1</th>
                    <td>Universidad: </td>
                    <td>UNA PUNO</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Proceso de Admision: </td>
                    <td>General 2021-1</td>
                  </tr>
                  <tr class="table-info">
                    <th scope="row">3</th>
                    <td>Area: </td>
                    <td>Biomedicas</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Estudiante:  </td>
                    <td>Alex Edelfre Flores Mamani</td>
                  </tr>
                  <tr class="table-info">
                    <th scope="row">5</th>
                    <td>Carrera: </td>
                    <td>Medicina Humana</td>
                  </tr>
                  <tr>
                    <th scope="row">6</th>
                    <td>Mi puntaje: </td>
                    <td>2789</td>
                  </tr>
                  <tr class="table-info">
                    <th scope="row">7</th>
                    <td>Puntaje Maximo Promedio: </td>
                    <td>3300</td>
                  </tr>
                  <tr>
                    <th scope="row">8</th>
                    <td>Puntaje Minimo Promedio: </td>
                    <td>2300</td>
                  </tr>
                  <tr class="table-info">
                    <th scope="row">9</th>
                    <td>Probabilidad de Ingreso: </td>
                    <td>80%</td>
                  </tr>
                </tbody>
              </table>
      
              <p>Mensaje Segun porcentaje</p>
      
              
            </div>
          </div>
        </div>
      </div> 
    </div>

    <div class="container mt-5">
      <h1>Resultados por Asignatura</h1>
      <div class="row">
        {{-- card --}}
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header">Matematica I</div>
            <div class="card-body">
              <h5 class="card-title">Buenas: </h5>
              <h5 class="card-title">Malas: </h5>
              <h5 class="card-title">Blanco: </h5>
              <h5 class="card-title">%correctas: </h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        {{-- fin-card --}}

        {{-- card --}}
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header">Matematica I</div>
            <div class="card-body">
              <h5 class="card-title">Buenas: </h5>
              <h5 class="card-title">Malas: </h5>
              <h5 class="card-title">Blanco: </h5>
              <h5 class="card-title">%correctas: </h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        {{-- fin-card --}}

                        {{-- card --}}
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header">Matematica I</div>
            <div class="card-body">
              <h5 class="card-title">Buenas: </h5>
              <h5 class="card-title">Malas: </h5>
              <h5 class="card-title">Blanco: </h5>
              <h5 class="card-title">%correctas: </h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        {{-- fin-card --}}

        {{-- card --}}
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header">Matematica I</div>
            <div class="card-body">
              <h5 class="card-title">Buenas: </h5>
              <h5 class="card-title">Malas: </h5>
              <h5 class="card-title">Blanco: </h5>
              <h5 class="card-title">%correctas: </h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        {{-- fin-card --}}


      </div>
    </div>
  </div>
@endsection