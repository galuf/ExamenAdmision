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
        $cal = Calificacion::where('asignatura_id','=',$request['asignatura_id'])
                            ->where('area_id','=',$request['area_id'])
                            ->first();
        $res = new Respuesta;
        $res->examen_id = intval($request->examen_id);
        $res->asignatura_id = $request['asignatura_id'];
        $res->calificacion_id = intval($cal->id);
        $res->respuesta = $request['respuesta'];
        $res->pregunta_num = intval($request['pregunta']);
        $res->save();

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
