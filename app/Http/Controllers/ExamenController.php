<?php

namespace App\Http\Controllers;

use App\Area;
use App\Tipo;
use App\Examen;
use App\Admision;
use App\Respuesta;
use App\Universidad;
use App\Calificacion;
use App\Punto;
use App\Ptjingreso;
use Illuminate\Http\Request;

class ExamenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function unique_multidim_array($array, $key) {
        $temp_array = array();
        $i = 0;
        $key_array = array();
        foreach($array as $val) {
            if (!in_array($val[$key], $key_array)) {
                $key_array[$i] = $val[$key];
                $temp_array[$i] = $val;
            }
            $i++;
        }
        return $temp_array;
    }

    public function index(Request $request)
    {
        $examenes = Examen::all();
        $ex = [];
        foreach($examenes as $examen){
            array_push($ex, [
                'titulo' => $examen->universidad->nombre ." ".$examen->admision->nombre,
                'universidad_id' =>$examen->universidad_id,
                'admision_id' => $examen->admision_id
            ]);
        }
        $ex_f = $this->unique_multidim_array($ex,'titulo');
        
        return view('index',
                    compact('ex_f'));
        // return ['data' => $ex_f];


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
        $admision = Admision::find($request->admision)->nombre;
        $universidad = Universidad::find($request->universidad)->nombre;
        
        $examen->nombre = $universidad." ".$admision." ". $area." ".$tipo;
        $examen->universidad_id = $request->universidad;
        $examen->tipo_id = $request->tipo;
        $examen->area_id = $request->area;
        $examen->admision_id = $request->admision;
        $examen->tiempo= $request->tiempo;
        $examen->preguntas=$request->preguntas;
        $examen->puntaje_maximo = $request->maximo;
        $examen->puntaje_minimo = ($request->maximo)*11/20;
        $examen->save();
        return redirect()->action('RespuestaController@create',['id' =>$examen->id ]);
    }

    public function calificar(Request $request){
        $id = $request->id;

        $examen = Examen::find($id);
        $puntos = Punto::where('universidad_id','=',$examen->universidad_id)
                        ->where('admision_id','=',$examen->admision_id)
                        ->first();
        $resultado = 0;

        $correctas = 0;
        $malas = 0;
        $blancos = 0;
        
        $respuestas = Respuesta::find($id);

        $res_corr = $respuestas->respuestas;
        $asignaturas = $respuestas->asignaturas;
        $cad_resp='';
        $p = '';
        for($i=1;$i<=$examen->preguntas;$i++){
            $re = 'resp'.$i;
            $cad_resp .= $request[$re];
            $p = explode('-',$asignaturas);
            $ponderacion = Calificacion::where('universidad_id','=',$examen->universidad_id)
                        ->where('admision_id','=',$examen->admision_id)
                        ->where('area_id','=',$examen->area_id)
                        ->where('asignatura_id','=',$p[$i-1])
                        ->first();
            if($request[$re] == $res_corr[$i-1]){
                $resultado += $puntos->buena*$ponderacion->ponderacion;
                $correctas++;
            }else if($request[$re] == 'x'){
                $resultado += $puntos->blanco*$ponderacion->ponderacion;
                $blancos++;
            }else{
                $malas++;
            }
        }

        return redirect()->action('ExamenController@resultado',
                                    ["id" => $id,
                                    "puntaje" => $resultado,
                                    "correctas" => $correctas,
                                    "blanco" => $blancos,
                                    "malas" => $malas,
                                    "miRes" => $cad_resp]
        );     
    }

    public function resultado(Request $request){
        $carrera = 6;
        //return view('examen.resultado');
        // echo "Hola";
        $examen = Examen::find($request->id);
        // $miExamen = Miexamen::find($carrera);
        $puntajes = Ptjingreso::where('universidad_id','=',$examen->universidad->id)
                                ->where('admision_id','=',$examen->admision->id)
                                ->where('area_id','=',$examen->area->id)
                                ->where('carrera_id','=',$carrera)
                                ->get();
                                //->fisrt();
        $res =  [
                'universidad' => $examen->universidad->nombre,
                'admision' => $examen->admision->nombre,
                'area' => $examen->area->nombre,
                'user' => 'Alex Edelfre Flores Mamani',
                'carrera' => 'Medicina Humana',
                'puntaje' => $request->puntaje,
                //'ptj' => $puntajes
                'maxIng' => ($puntajes[0]->porc_max)*($examen->puntaje_maximo)/100,
                'minIng' => ($puntajes[0]->porc_min)*($examen->puntaje_minimo)/100
            ];
        return view('examen.resultado', $res);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Examen  $examen
     * @return \Illuminate\Http\Response
     */

    public function seleccion(Request $request){
        $examen = $request->examen;
        return ['data' => $examen['titulo']];
    }
    
    public function show(Examen $examen)
    {
        return view('examen.prueba',compact('examen'));
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
