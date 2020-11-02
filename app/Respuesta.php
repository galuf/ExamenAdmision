<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    public function examen(){
        return $this->belongsTo(Examen::class);
    }

    public function asignatura(){
        return $this->belongsTo(Asignatura::class);
    }

    public function calificacion(){
        return $this->belongsTo(Calificacion::class);
    }
}
