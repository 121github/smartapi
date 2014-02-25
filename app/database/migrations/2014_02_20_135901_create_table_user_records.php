<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUserRecords extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('user_records', function($table) {
              $table->increments('id');
              $table->integer('user_id')->unsigned();
              $table->integer('record_id')->unsigned();
              $table->unique(array('user_id', 'record_id'));
              $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
              $table->foreign('record_id')->references('id')->on('records')->onDelete('cascade');
            });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::drop('user_records');
  }

}

?>