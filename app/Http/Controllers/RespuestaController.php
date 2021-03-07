<?php

namespace App\Http\Controllers;

use App\Examen;
use App\Respuesta;
use App\Asignatura;
use App\Calificacion;
use Illuminate\Http\Request;

class RespuestaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {   
        $examen = Examen::find($request->id);
        $asignaturas = Asignatura::all();
        return view('examen.preguntas',compact('examen','asignaturas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //echo "Examen id :".$request->id.'<br>';
        $examen = Examen::find($request->id);
        $cad_resp='';
        $cad_asig='';
        for($i=1;$i<=$examen->preguntas;$i++){
            $re = 'adm-resp'.$i;
            $asi = 'adm-prg'.$i;
            $cad_resp .= $request[$re];
            $cad_asig .= $request[$asi];
            if($i != $examen->preguntas)
                $cad_asig .= '-';
        }
        $res = new Respuesta;
        $res->examen_id = $examen->id;
        $res->respuestas = $cad_resp;
        $res->asignaturas = $cad_asig;
        $res->save();
        echo "respuesta: ".$cad_resp." asignaturas: ".$cad_asig."<br>";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Respuesta  $respuesta
     * @return \Illuminate\Http\Response
     */
    public function show(Respuesta $respuesta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Respuesta  $respuesta
     * @return \Illuminate\Http\Response
     */
    public function edit(Respuesta $respuesta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Respuesta  $respuesta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Respuesta $respuesta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Respuesta  $respuesta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Respuesta $respuesta)
    {
        //
    }
}
