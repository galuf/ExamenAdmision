<?php

namespace App\Http\Controllers;

use App\Area;
use App\Tipo;
use App\Examen;
use App\Admision;
use App\Respuesta;
use App\Universidad;
use Illuminate\Http\Request;

class ExamenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $examen = Examen::find($request->id);
        return view('examen.resolver',
                compact('examen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos = Tipo::all();
        $universidades = Universidad::all();
        $admisions = Admision::all();
        $areas = Area::all();
        return view('examen.create',
                compact('tipos','universidades','admisions','areas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $examen = new Examen;
        $area = Area::find($request->area)->nombre;
        $tipo = Tipo::find($request->tipo)->tipo;
        $examen->nombre = 'Cepre UNA ' . $area." ".$tipo;
        $examen->universidad_id = $request->universidad;
        $examen->tipo_id = $request->tipo;
        $examen->area_id = $request->area;
        $examen->admision_id = $request->admision;
        $examen->save();
        return redirect()->action('RespuestaController@create',['id' =>$examen->id ]);
    }

    public function resultado(Request $request){
        $correcta = 10;
        $blanco = 2;
        $mal = 0;
        $resultado = 0;

        $correctas = 0;
        $malas = 0;
        $blancos = 0;

        for($i = 1;$i<=60;$i++){
            $preg = Respuesta::where('examen_id','=',$request->examen)
                                ->where('pregunta_num','=',$i)->first();
            if($request['pregunta_'.$i] == $preg->respuesta){
                $resultado += $correcta*$preg->calificacion->ponderacion;
                $correctas++;
            }else if($request['pregunta_'.$i] == ''){
                $resultado += $blanco*$preg->calificacion->ponderacion;
                $blancos++;
            }else{
                $malas++;
            }
        }
        return view('examen.resultado')->with(['result' =>$resultado,
                'buenas'=>$correctas,
                'blanco'=>$blancos,
                'malas'=>$malas]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Examen  $examen
     * @return \Illuminate\Http\Response
     */
    public function show(Examen $examen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Examen  $examen
     * @return \Illuminate\Http\Response
     */
    public function edit(Examen $examen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Examen  $examen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Examen $examen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Examen  $examen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Examen $examen)
    {
        //
    }
}
