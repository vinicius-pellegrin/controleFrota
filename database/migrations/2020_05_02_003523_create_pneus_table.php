<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePneusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pneus', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('largura');
            $table->integer('altura');
            $table->integer('roda');
            $table->string('marca',25);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pneus');
    }
}
