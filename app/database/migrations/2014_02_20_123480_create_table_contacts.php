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
              $table->string('title',20);
              $table->string('first_name',255);
              $table->string('last_name',255);
              $table->string('email',20);
              $table->string('website',100);
              $table->string('linkedin',100);
             $table->integer('position_id')->unsigned()->nullable()->default(null);
             $table->string('notes',255);
             $table->string('image',255);
             $table->timestamps();
             $table->softDeletes();
             $table->foreign('record_id')->references('id')->on('records')->onDelete('cascade')->onUpdate('no action');;
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