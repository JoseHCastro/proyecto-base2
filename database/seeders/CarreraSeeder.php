<?php

namespace Database\Seeders;

use App\Models\Carrera;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //  (1, '132-0', 'ODONTOLOGIA', 'PRESENCIAL', 'SANTA CRUZ', 1);
        //  (2, '132-0', 'ODONTOLOGIA', 'PRESENCIAL', 'CAMIRI', 1);
        //  (3, '234-5', 'INGENIERIA DEL PETROLEO Y GAS', 'PRESENCIAL', 'CAMIRI', 1);
        //  (4, '236-3', 'INGENIERIA EN AGROPECUARIA', 'PRESENCIAL', 'CAMIRI', 1);
        //  (5, '238-1', 'INGENIERIA SOCIO AMBIENTAL', 'PRESENCIAL', 'CAMIRI', 1);
        //  (6, '160-0', 'INGENIERIA EN AGRIMENSURA', 'PRESENCIAL', 'SANTA CRUZ', 2);

        //1
        Carrera::create([
            'Sigla'=>'132-0',
            'Nombre_Carrera'=>'ODONTOLOGIA',
            'Modalidad'=>'PRESENCIAL',
            'Localidad'=>'SANTA CRUZ',
            'Facultad_ID'=>1,
        ]);

        //2
        Carrera::create([
            'Sigla'=>'132-0',
            'Nombre_Carrera'=>'ODONTOLOGIA',
            'Modalidad'=>'PRESENCIAL',
            'Localidad'=>'CAMIRI',
            'Facultad_ID'=>1,
        ]);

        //3
        Carrera::create([
            'Sigla'=>'234-5',
            'Nombre_Carrera'=>'INGENIERIA DEL PETROLEO Y GAS',
            'Modalidad'=>'PRESENCIAL',
            'Localidad'=>'CAMIRI',
            'Facultad_ID'=>1,
        ]);

        //4
        Carrera::create([
            'Sigla'=>'236-3',
            'Nombre_Carrera'=>'INGENIERIA EN AGROPECUARIA',
            'Modalidad'=>'PRESENCIAL',
            'Localidad'=>'CAMIRI',
            'Facultad_ID'=>1,
        ]);

        //5
        Carrera::create([
            'Sigla'=>'238-1',
            'Nombre_Carrera'=>'INGENIERIA SOCIO AMBIENTAL',
            'Modalidad'=>'PRESENCIAL',
            'Localidad'=>'CAMIRI',
            'Facultad_ID'=>1,
        ]);

        //6
        Carrera::create([
            'Sigla'=>'160-0',
            'Nombre_Carrera'=>'INGENIERIA EN AGRIMENSURA',
            'Modalidad'=>'PRESENCIAL',
            'Localidad'=>'SANTA CRUZ',
            'Facultad_ID'=>2,
        ]);
    }
}
