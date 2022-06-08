<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Gato_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('animales')->insert([
            'nombre'=>'micky',
            'color'=>'cafe',
            'tamaño'=>'mediana',
            'raza'=>'mimiau2',
            'sexo'=>'macho',
        ]);
    }
}


