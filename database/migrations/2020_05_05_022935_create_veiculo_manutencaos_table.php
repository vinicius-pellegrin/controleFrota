<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeiculoManutencaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculo_manutencaos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('manutencao_id');
            $table->foreign('manutencao_id')->references('id')->on('manutencaos');
            $table->integer('veiculo_id');
            $table->foreign('veiculo_id')->references('id')->on('veiculos');
            $table->Date('dataInicioManutencao');
            $table->Date('dataRetronoManutencao')->nullable();
            $table->integer('kmRetornoManutencao')->nullable();
            $table->string('descricao',500);
            


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('veiculo_manutencaos');
    }
}
