<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLotaipmesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lotaipmes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('descripcion',100);
    
               $table->bigInteger('id_usuario')->unsigned();
               $table->foreign('id_usuario')->references('id')->on('users');

               $table->bigInteger('id_anio')->unsigned();
               $table->foreign('id_anio')->references('id')->on('lotaipanio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lotaipmes');
    }
}
