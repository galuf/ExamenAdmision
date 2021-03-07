<?php

use App\Punto;
use Illuminate\Database\Seeder;
class PuntosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $puntos = new Punto;
        $puntos->universidad_id = 1;
        $puntos->admision_id = 1;
        $puntos->buena = 10;
        $puntos->mala = 0;
        $puntos->blanco = 2;
        $puntos->save();
    }
}
