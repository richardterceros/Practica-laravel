<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_details', function (Blueprint $table) {
            $table->id('id_detalle');
            $table->unsignedBigInteger('id_venta');
            $table->unsignedBigInteger('id_producto');
            $table->decimal('precio',15,2);
            $table->string('cantidad',11);
            $table->decimal('subtotal',15,0);
            $table->date('fecha');
            $table->time('hora');
            $table->tinyInteger('estado');
            $table->timestamps();

            $table->foreign('id_venta')->references('id_venta')->on('sales');
            $table->foreign('id_producto')->references('id_producto')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('sales_details');
        Schema::enableForeignKeyConstraints();
    }
}
