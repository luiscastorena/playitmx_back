<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->string('orden', 100);
            $table->dateTime('fechaEntrega', 0);
            $table->dateTime('fechaPedido', 0);
            $table->string('nombreRecibe', 100);
            $table->enum('status', ['cotizado', 'pedido','enviado']);
            $table->double('precioProducto', 8, 2);
            $table->boolean('pago');
            $table->unsignedBigInteger('games_id');
            $table->unsignedBigInteger('clientes_id');
            $table->foreign('games_id')->references('id')->on('games');
            $table->foreign('clientes_id')->references('id')->on('clientes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
