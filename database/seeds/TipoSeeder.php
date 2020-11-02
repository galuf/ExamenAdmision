<?php

use App\Tipo;
use Illuminate\Database\Seeder;

class TipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipo = new Tipo;
        $tipo->tipo = 'P';
        $tipo->save();

        $tipo = new Tipo;
        $tipo->tipo = 'Q';
        $tipo->save();

        $tipo = new Tipo;
        $tipo->tipo = 'R';
        $tipo->save();

        $tipo = new Tipo;
        $tipo->tipo = 'S';
        $tipo->save();

        $tipo = new Tipo;
        $tipo->tipo = 'T';
        $tipo->save();
    }
}
