<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Donantes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('donantes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('soy');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('edad');
            $table->string('telefono');
            $table->string('email')->unique();
            $table->string('donante');
            $table->string('sexo');
            $table->string('tipo_sangre');
            $table->string('dui')->unique();
            $table->string('padecimiento');
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
