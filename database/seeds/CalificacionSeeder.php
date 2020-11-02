<?php

use App\Calificacion;
use Illuminate\Database\Seeder;

class CalificacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Calificacion Biomedicas
        $cal = new Calificacion;
        $cal->asignatura_id = 3;
        $cal->area_id = 1;
        $cal->ponderacion = 1.75;
        $cal->save();

        $cal = new Calificacion;
        $cal->asignatura_id = 4;
        $cal->area_id = 1;
        $cal->ponderacion = 1.75;
        $cal->save();

        $cal = new Calificacion;
        $cal->asignatura_id = 5;
        $cal->area_id = 1;
        $cal->ponderacion = 5.25;
        $cal->save();

        $cal = new Calificacion;
        $cal->asignatura_id = 6;
        $cal->area_id = 1;
        $cal->ponderacion = 5.25;
        $cal->save();

        $cal = new Calificacion;
        $cal->asignatura_id = 12;
        $cal->area_id = 1;
        $cal->ponderacion = 4.375;
        $cal->save();

        $cal = new Calificacion;
        $cal->asignatura_id = 13;
        $cal->area_id = 1;
        $cal->ponderacion = 4.375;
        $cal->save();

        // Calificaion Sociales
        $cal = new Calificacion;
        $cal->asignatura_id = 7;
        $cal->area_id = 2;
        $cal->ponderacion = 4.375;
        $cal->save();

        $cal = new Calificacion;
        $cal->asignatura_id = 8;
        $cal->area_id = 2;
        $cal->ponderacion = 4.375;
        $cal->save();

        $cal = new Calificacion;
        $cal->asignatura_id = 9;
        $cal->area_id = 2;
        $cal->ponderacion = 2.625;
        $cal->save();

        $cal = new Calificacion;
        $cal->asignatura_id = 10;
        $cal->area_id = 2;
        $cal->ponderacion = 2.625;
        $cal->save();

        $cal = new Calificacion;
        $cal->asignatura_id = 11;
        $cal->area_id = 2;
        $cal->ponderacion = 4.375;
        $cal->save();

        $cal = new Calificacion;
        $cal->asignatura_id = 12;
        $cal->area_id = 2;
        $cal->ponderacion = 4.375;
        $cal->save();

        $cal = new Calificacion;
        $cal->asignatura_id = 13;
        $cal->area_id = 2;
        $cal->ponderacion = 4.375;
        $cal->save();

        //Calificacion Ingenierias

        $cal = new Calificacion;
        $cal->asignatura_id = 1;
        $cal->area_id = 3;
        $cal->ponderacion = 5.25;
        $cal->save();

        $cal = new Calificacion;
        $cal->asignatura_id = 2;
        $cal->area_id = 3;
        $cal->ponderacion = 5.25;
        $cal->save();

        $cal = new Calificacion;
        $cal->asignatura_id = 3;
        $cal->area_id = 3;
        $cal->ponderacion = 1.75;
        $cal->save();

        $cal = new Calificacion;
        $cal->asignatura_id = 4;
        $cal->area_id = 3;
        $cal->ponderacion = 1.75;
        $cal->save();

        $cal = new Calificacion;
        $cal->asignatura_id = 12;
        $cal->area_id = 3;
        $cal->ponderacion = 4.375;
        $cal->save();

        $cal = new Calificacion;
        $cal->asignatura_id = 13;
        $cal->area_id = 3;
        $cal->ponderacion = 4.375;
        $cal->save();
    }
}
