<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('modelo',50);
            $table->integer('ano');
            $table->String('placa',10);
            $table->integer('ocupantes');
            

//chaves estrangeiras 
          /*  $table->integer('combustivel_id')->unsigned();
            $table->foreign('combustivel_id')->references('id')->on('combustivels');
            $table->integer('pneu_id')->unsigned();
            $table->foreign('pneu_id')->references('id')->on('pneus');            
            $table->integer('marca_id')->unsigned();
            $table->foreign('marca_id')->references('id')->on('marcas');
            $table->integer('tipoVeiculo_id')->unsigned();
            $table->foreign('tipoVeiculo_id')->references('id')->on('tipo_veiculos');
        */});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('veiculos');
    }
}
