<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProyectMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('proyects', function (Blueprint $table) {

             $table->increments('id');
             $table->integer('creator_id');
             $table->string('name');
             $table->string('description');
             $table->string('objetive');
             $table->string('needs');
             $table->timestamp('created_at');
             $table->date('deleted_at')->nullable();
             $table->date('updated_at');
        });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::dropIfExists('proyects');
     }
 }
