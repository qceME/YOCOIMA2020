<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActividadUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividad_user', function (Blueprint $table) {


            $table->bigInteger('actividad_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            
            
            $table->foreign('actividad_id')
            ->references('id')
            ->on('actividads')
            ->onDelete('cascade')
            ->onUpdate('cascade');


            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actividad_user');
    }
}
