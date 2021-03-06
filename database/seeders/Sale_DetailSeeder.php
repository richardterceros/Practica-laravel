<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Sale_DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sales_details')->insert([
            'id_venta' => '1',
            'id_producto' => '6',
            'precio' => '0.50',
            'cantidad' => '2',
            'subtotal' => '1.00',
            'fecha' => '2020-04-05',
            'hora' => '23:25:17',
            'estado' => '1'
        ]);

        DB::table('sales_details')->insert([
            'id_venta' => '2',
            'id_producto' => '8',
            'precio' => '5.50',
            'cantidad' => '3',
            'subtotal' => '17.00',
            'fecha' => '2020-10-1',
            'hora' => '23:25:17',
            'estado' => '1'
        ]);

        DB::table('sales_details')->insert([
            'id_venta' => '3',
            'id_producto' => '8',
            'precio' => '10.00',
            'cantidad' => '1',
            'subtotal' => '10.00',
            'fecha' => '2020-06-01',
            'hora' => '23:25:17',
            'estado' => '1'
        ]);

        DB::table('sales_details')->insert([
            'id_venta' => '4',
            'id_producto' => '1',
            'precio' => '120.00',
            'cantidad' => '1',
            'subtotal' => '120.00',
            'fecha' => '2020-09-02',
            'hora' => '23:25:17',
            'estado' => '1'
        ]);

        DB::table('sales_details')->insert([
            'id_venta' => '1',
            'id_producto' => '1',
            'precio' => '8.00',
            'cantidad' => '1',
            'subtotal' => '8.00',
            'fecha' => '2020-08-03',
            'hora' => '23:25:17',
            'estado' => '1'
        ]);
    }
}
