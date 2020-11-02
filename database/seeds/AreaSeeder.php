<?php

use App\Area;
use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $area = new Area;
        $area->nombre = 'Ciencias Biomedicas';
        $area->save();

        $area = new Area;
        $area->nombre = 'Ciencias Sociales';
        $area->save();

        $area = new Area;
        $area->nombre = 'Ciencias de la Ingenieria';
        $area->save();
    }
}
