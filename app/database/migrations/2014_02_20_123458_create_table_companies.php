<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCompanies extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('companies', function($table) {
              $table->increments('id');
              $table->integer('record_id')->unsigned();
              $table->string('name',100);
              $table->string('description');
              $table->string('notes');
              $table->string('website',100);
              $table->integer('company_state_id')->unsigned()->nullable()->default('1');
              $table->integer('turnover')->nullable();
              $table->integer('employees')->nullable();
              $table->integer('company_number')->nullable();
              $table->string('linkedin');
              $table->string('logo');
              $table->foreign('company_state_id')->references('id')->on('company_states')->onDelete('set null')->onUpdate('no action');;
              $table->foreign('record_id')->references('id')->on('records')->onDelete('cascade')->onUpdate('no action');;
            });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::drop('company_details');
  }

}

?>