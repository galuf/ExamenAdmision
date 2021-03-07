<?php

use App\Ptjingreso;
use Illuminate\Database\Seeder;
class PtsIngresoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ptjs = [
            ['1','1','1','1',78.74,60.43], //0,'Medicina Veterinaria y Zootecnica'],
            ['1','1','1','2',78.58,63.22], //0,'Enfermeria'],
            ['1','1','1','3',64.48,58.02], //,'Biología: Pesquería'],
            ['1','1','1','4',74.30,61.55], //,'Biología: Microbiología'],
            ['1','1','1','5',73.53,58.23], //,'Biología: Ecología'],
            ['1','1','1','6',91.51,85.80], //,'Medicina Humana'],
            ['1','1','1','7',71.96,60.72], //,'Nutrición Humana'],
            ['1','1','1','8',77.93,68.13], //,'Odontologia'],
            ['1','1','2','9',82.84,66.93], //,'Ciencias Contables'],
            ['1','1','2','10',75.70,59.24], //0,'Trabajo Social'],
            ['1','1','2','11',71.16,57.16], //0,'Sociología'],
            ['1','1','2','12',76.32,59.76], //20,'Educación Primaria'],
            ['1','1','2','13',77.87,64.43], //20,'Educación Inicial'],
            ['1','1','2','14',76.88,60.44], //20,'Educación Física'],
            ['1','1','2','15',82.76,63.38], //20,'Educación Secundaria: Lengua ...'],
            ['1','1','2','16',77.44,60.95], //20,'Educación Secundaria: Ciencias Sociales'],
            ['1','1','2','17',83.08,59.63], //20,'Educación Secundaria: Matemática ...'],
            ['1','1','2','18',73.0,57.73], //30,'Educación Secundaria: C.T.A.'],
            ['1','1','2','19',71.85,55.54], //0,'Antropología'],
            ['1','1','2','20',83.99,75.03], //0,'Derecho'],
            ['1','1','2','21',73.12,58.50], //0,'Turismo'],
            ['1','1','2','22',76.10,58.48], //0,'Ciencias de la Comunicación Social'],
            ['1','1','2','23',84.02,66.94], //0,'Administración'],
            ['1','1','2','24',77.86,60.81], //30,'Arte: Música'],
            ['1','1','2','25',75.84,56.96], //30,'Arte: Plásticas'],
            ['1','1','2','26',71.51,57.41], //30,'Arte: Danza'],
            ['1','1','3','27',74.09,57.41], //20,'Ingeniería Agronómica'],
            ['1','1','3','28',84.95,73.78], //0,'Ingeniería Económica'],
            ['1','1','3','29',82.71,65.42], //0,'Ingeniería de Minas'],
            ['1','1','3','30',77.28,66.81], //0,'Ingeniería Geológica'],
            ['1','1','3','31',76.07,56.83], //20,'Ingeniería Metalúrgica'],
            ['1','1','3','32',78.47,58.93], //20,'Ingeniería Química'],
            ['1','1','3','33',78.43,57.15], //20,'Ingeniería Estadística e Informática'],
            ['1','1','3','34',73.67,57.95], //0,'Ingeniería Topográfica y Agrimensura'],
            ['1','1','3','35',74.11,56.33], //20,'Ingeniería Agroindustrial'],
            ['1','1','3','36',70.39,55.19], //0,'Ingeniería Agrícola'],
            ['1','1','3','37',88.15,76.30], //0,'Ingeniería Civil'],
            ['1','1','3','38',79.57,65.34], //0,'Ingeniería de Sistemas'],
            ['1','1','3','39',77.03,60.97], //0,'Ingeniería Mecánica Eléctrica'],
            ['1','1','3','40',77.31,57.14], //0,'Ingeniería Electrónica'],
            ['1','1','3','41',85.50,72.32], //0,'Arquitectura y Urbanismo'],
            ['1','1','3','42',81.57,59.23], //20,'Ciencias Físico Matemáticas']
        ];

        foreach($ptjs as $ptj){
            $p = new Ptjingreso;
            $p->universidad_id = $ptj[0];
            $p->admision_id = $ptj[1];
            $p->area_id = $ptj[2];
            $p->carrera_id = $ptj[3];
            $p->porc_max = $ptj[4];
            $p->porc_min = $ptj[5];
            $p->save();
        }
    }
}
