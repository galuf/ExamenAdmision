<?php

use App\Carrera;
use Illuminate\Database\Seeder;
class CarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   // uni_id area_id %extraVocacional nombre
        $carreras = [
            ['1','1',20,'Medicina Veterinaria y Zootecnica'],
            ['1','1',20,'Enfermeria'],
            ['1','1',0,'Biología: Pesquería'],
            ['1','1',0,'Biología: Microbiología'],
            ['1','1',0,'Biología: Ecología'],
            ['1','1',0,'Medicina Humana'],
            ['1','1',0,'Nutrición Humana'],
            ['1','1',0,'Odontologia'],
            ['1','2',0,'Ciencias Contables'],
            ['1','2',0,'Trabajo Social'],
            ['1','2',0,'Sociología'],
            ['1','2',20,'Educación Primaria'],
            ['1','2',20,'Educación Inicial'],
            ['1','2',20,'Educación Física'],
            ['1','2',20,'Educación Secundaria: Lengua ...'],
            ['1','2',20,'Educación Secundaria: Ciencias Sociales'],
            ['1','2',20,'Educación Secundaria: Matemática ...'],
            ['1','2',30,'Educación Secundaria: C.T.A.'],
            ['1','2',0,'Antropología'],
            ['1','2',0,'Derecho'],
            ['1','2',0,'Turismo'],
            ['1','2',0,'Ciencias de la Comunicación Social'],
            ['1','2',0,'Administración'],
            ['1','2',30,'Arte: Música'],
            ['1','2',30,'Arte: Plásticas'],
            ['1','2',30,'Arte: Danza'],
            ['1','3',20,'Ingeniería Agronómica'],
            ['1','3',0,'Ingeniería Económica'],
            ['1','3',0,'Ingeniería de Minas'],
            ['1','3',0,'Ingeniería Geológica'],
            ['1','3',20,'Ingeniería Metalúrgica'],
            ['1','3',20,'Ingeniería Química'],
            ['1','3',20,'Ingeniería Estadística e Informática'],
            ['1','3',0,'Ingeniería Topográfica y Agrimensura'],
            ['1','3',20,'Ingeniería Agroindustrial'],
            ['1','3',0,'Ingeniería Agrícola'],
            ['1','3',0,'Ingeniería Civil'],
            ['1','3',0,'Ingeniería de Sistemas'],
            ['1','3',0,'Ingeniería Mecánica Eléctrica'],
            ['1','3',0,'Ingeniería Electrónica'],
            ['1','3',0,'Arquitectura y Urbanismo'],
            ['1','3',20,'Ciencias Físico Matemáticas']
        ];
        foreach($carreras as $carrera){
            $carr = new Carrera;
            $carr->universidad_id = $carrera[0];
            $carr->area_id = $carrera[1];
            $carr->vocacional = $carrera[2];
            $carr->nombre = $carrera[3];
            $carr->save();
        }

    }
}
