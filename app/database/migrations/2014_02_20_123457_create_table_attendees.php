<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAttendees extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('attendees', function($table) {
      $table->integer('appointment_id')->unsigned();
      $table->integer('user_id')->unsigned();
      $table->index(array('appointment_id', 'user_id'));
      $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
      $table->foreign('appointment_id')->references('id')->on('appointments')->onDelete('cascade');
      });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::drop('attendees');
  }

}

?>