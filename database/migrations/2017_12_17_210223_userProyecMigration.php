<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserProyecMigration extends Migration
{
  public function up()
  {
      Schema::create('userProyects', function (Blueprint $table) {

          $table->increments('id');
          $table->integer('user_id');
          $table->integer('proyect_id');

     });
}

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
      Schema::dropIfExists('userProyecs');
  }
}
