<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UniversidadSeeder::class);
        $this->call(TipoSeeder::class);
        $this->call(AsignaturaSeeder::class);
        $this->call(AreaSeeder::class);
        $this->call(AdmisionSeeder::class);
        $this->call(CalificacionSeeder::class);
        $this->call(PuntosSeeder::class);
        $this->call(CarreraSeeder::class);
        $this->call(PtsIngresoSeeder::class);
        $this->call(UserSeeder::class);
    }
}
