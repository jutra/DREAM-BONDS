<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SolicitudMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('solicitudes', function (Blueprint $table) {
             $table->increments('id');
             $table->integer('user_id');
             $table->integer('proyect_id');
             $table->string('info');
             $table->timestamp('created_at');

         });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::dropIfExists('solicitudes');
     }
}
