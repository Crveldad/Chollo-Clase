<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CholloCategoria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chollo_categoria', function(Blueprint $table){

        $table->id();

        $table->foreignId('chollo_id')
        ->nullable()
        ->constrained('chollos')
        ->cascadeOnUpdate()
        ->nullOnDelete();

        $table->foreignId('categoria_id')
        ->nullable()
        ->constrained('categorias')
        ->cascadeOnUpdate()
        ->nullOnDelete();

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
        //
    }
}
