<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbastecimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abastecimentos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('dataAbastecimento');
            $table->integer('numeroCupom');
            $table->integer('kilometragem');
            $table->double('litros');
            $table->double('valor');
            $table->integer('veiculo_id');
            $table->foreign('veiculo_id')->references('id')->on('veiculos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abastecimentos');
    }
}
