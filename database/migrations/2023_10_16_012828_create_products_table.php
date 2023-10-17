<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripción');
            $table->decimal('precio', 10, 2); // Precio con 2 decimales
            $table->integer('stock');
            $table->string('imagen')->nullable(); // La imagen es opcional, puedes ajustar esto según tus necesidades
            $table->unsignedBigInteger('categoria_id');
            $table->timestamps();

            $table->foreign('categoria_id')->references('id')->on('categories'); // Asegúrate de que 'categories' sea el nombre correcto de tu tabla de categorías
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
};
