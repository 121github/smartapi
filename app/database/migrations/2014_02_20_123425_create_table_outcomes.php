<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOutcomes extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('outcomes', function($table) {
              $table->increments('id');
              $table->string('name')->unique();
              $table->string('description');
              $table->integer('email_id')->nullable()->default(null)->unsigned();
              $table->integer('record_state_id')->nullable()->default(null)->unsigned();
              $table->integer('reassign')->nullable()->default(null);
              $table->foreign('record_state_id')->references('id')->on('record_states')->onDelete('set null');
            });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::drop('outcomes');
  }

}

?>