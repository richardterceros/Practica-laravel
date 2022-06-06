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
            'nombre' => 'Producto 1',
            'precio' => '0.50',
            'descripcion' => 'Descripcion del producto 1',
            'foto' => 'producto1.jpg',
            'fecha' => '2020-06-05',
            'hora' => '23:25:17',
            'estado' => '1'
        ]);
    }
}
