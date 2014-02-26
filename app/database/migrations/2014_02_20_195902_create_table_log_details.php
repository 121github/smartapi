<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLogDetails extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('log_details', function($table) {
              $table->increments('id');
              $table->integer('log_id')->unsigned();
              $table->integer('row_id')->unsigned();
              $table->string('change_field',50);
              $table->string('old_val',255);
              $table->string('new_val',255);
              $table->foreign('log_id')->references('id')->on('logs')->onDelete('cascade')->onUpdate('no action');;
            });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::drop('log_details');
  }

}

?>