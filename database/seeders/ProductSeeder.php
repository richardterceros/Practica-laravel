<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            'nombre' => 'LEche ',
            'precio' => '7.50',
            'descripcion' => 'Leche Pil',
            'foto' => 'leche.jpg',
            'fecha' => '2020-06-05',
            'hora' => '23:25:17',
            'estado' => '1'
        ]);

        DB::table('product')->insert([
            'nombre' => 'Chocolate',
            'precio' => '5.50',
            'descripcion' => 'Chocolate COndor',
            'foto' => 'chocolate.jpg',
            'fecha' => '2020-06-05',
            'hora' => '23:25:17',
            'estado' => '1'
        ]);
    }
}

