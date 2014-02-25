<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLogs extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('logs', function($table) {
              $table->increments('id');
              $table->integer('action_id')->unsigned();
              $table->integer('record_id')->unsigned();
              $table->string('action',20);
              $table->integer('user_id')->unsigned();
              $table->string('change_table',20);
              $table->timestamp('timestamp');
              $table->foreign('action_id')->references('id')->on('actions')->onDelete('cascade'); 
              $table->foreign('record_id')->references('id')->on('records')->onDelete('cascade');
              $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::drop('logs');
  }

}

?>