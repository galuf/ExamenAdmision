<?php

use App\Asignatura;
use Illuminate\Database\Seeder;

class AsignaturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $asignatura = new Asignatura;
        $asignatura->nombre = 'Matematica 1';
        $asignatura->save();

        $asignatura = new Asignatura;
        $asignatura->nombre = 'Matematica 2';
        $asignatura->save();

        $asignatura = new Asignatura;
        $asignatura->nombre = 'Fisica';
        $asignatura->save();

        $asignatura = new Asignatura;
        $asignatura->nombre = 'Quimica';
        $asignatura->save();

        $asignatura = new Asignatura;
        $asignatura->nombre = 'Biologia 1';
        $asignatura->save();

        $asignatura = new Asignatura;
        $asignatura->nombre = 'Biologia 2';
        $asignatura->save();

        $asignatura = new Asignatura;
        $asignatura->nombre = 'Psicologia y Filosofia';
        $asignatura->save();

        $asignatura = new Asignatura;
        $asignatura->nombre = 'Historia y Geografia';
        $asignatura->save();

        $asignatura = new Asignatura;
        $asignatura->nombre = 'Educacion Civica';
        $asignatura->save();

        $asignatura = new Asignatura;
        $asignatura->nombre = 'Economia';
        $asignatura->save();

        $asignatura = new Asignatura;
        $asignatura->nombre = 'Comunicacion y Literatura';
        $asignatura->save();

        $asignatura = new Asignatura;
        $asignatura->nombre = 'RM';
        $asignatura->save();

        $asignatura = new Asignatura;
        $asignatura->nombre = 'RV';
        $asignatura->save();
    }
}
