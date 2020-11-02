<?php

use App\Admision;
use Illuminate\Database\Seeder;

class AdmisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adm = new Admision;
        $adm->nombre = 'Cepre UNA';
        $adm->preguntas = 60;
        $adm->tiempo = '2:00:00';
        $adm->save();
    }
}
