<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sales')->insert([
            'cliente' => 'jorge chavez',
            'nit' => '4565',
            'total' => '1.00',
            'cancelado' => '5.00',
            'Cambio' => '4.00',
            'estado' => '1'


        ]);

        DB::table('sale')->insert([
            'cliente' => 'Maria Colque',
            'nit' => '78784',
            'total' => '16.50',
            'cancelado' => '20.00',
            'Cambio' => '3.50',
            'estado' => '1'

        ]);   

        DB::table('sale')->insert([
            'cliente' => 'Rocio Perez',
            'nit' => '6789',
            'total' => '20.00',
            'cancelado' => '10.00',
            'Cambio' => '10.00',
            'estado' => '1'
        ]);   

        DB::table('sale')->insert([
            'cliente' => 'Juan Perez',
            'nit' => '5253456789',
            'total' => '200.00',
            'cancelado' => '120.00',
            'Cambio' => '80.00',
            'estado' => '1'

        ]);   

        DB::table('sale')->insert([
            'cliente' => 'Roberto Perez',
            'nit' => '5251789',
            'total' => '10.00',
            'cancelado' => '8.00',
            'Cambio' => '2.00', 
            'estado' => '1'

        ]);   
    }
}
