<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddKmInicioManutencaoFieldTableVeiculoManutencaos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('veiculo_manutencaos', function (Blueprint $table) {
            //
           $table->integer('kmInicioManutencao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('veiculo_manutencaos', function (Blueprint $table) {
            //
        });
    }
}
