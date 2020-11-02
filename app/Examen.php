<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    public function universidad(){
        return $this->belongsTo(Universidad::class);
    }

    public function tipo(){
        return $this->belongsTo(Tipo::class);
    }

    public function area(){
        return $this->belongsTo(Area::class);
    }

    public function admision(){
        return $this->belongsTo(Admision::class);
    }
}
