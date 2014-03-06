<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableContacts extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('contacts', function($table) {
              $table->increments('id');
              $table->integer('record_id')->unsigned();
              $table->string('title', 20)->nullable()->default(null);
              $table->string('first_name')->nullable()->default(null);
              $table->string('last_name')->nullable()->default(null);
              $table->date('dob')->nullable()->default(null);
              $table->string('email', 20)->nullable()->default(null);
              $table->string('website', 100)->nullable()->default(null);
              $table->string('linkedin', 100)->nullable()->default(null);
              $table->string('company_name')->nullable()->default(null);
              $table->integer('position_id')->unsigned()->nullable()->default(null);
              $table->integer('income')->unsigned()->nullable()->default(null);
              $table->integer('marital_state_id')->unsigned()->nullable()->default(null);
              $table->integer('residential_state_id')->unsigned()->nullable()->default(null);
              $table->integer('dependants')->unsigned()->nullable()->default(null);
              $table->string('notes')->nullable()->default(null);
              $table->string('image')->nullable()->default(null);
              $table->timestamps();
              $table->softDeletes();
              $table->foreign('record_id')->references('id')->on('records')->onDelete('cascade')->onUpdate('no action');
              $table->foreign('residential_state_id')->references('id')->on('residential_states')->onDelete('cascade')->onUpdate('no action');
              $table->foreign('marital_state_id')->references('id')->on('marital_states')->onDelete('cascade')->onUpdate('no action');
            });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::drop('contacts');
  }

}

?>