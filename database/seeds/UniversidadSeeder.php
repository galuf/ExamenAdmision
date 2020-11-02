<?php

use App\Universidad;
use Illuminate\Database\Seeder;

class UniversidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $uni = new Universidad;
        $uni->nombre = "UNA";
        $uni->save();
    }
}
