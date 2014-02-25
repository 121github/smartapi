<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLocations extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('locations', function($table) {
              $table->increments('id');
              $table->string('postcode',10)->unique();
              $table->string('lat',10);
              $table->string('lng',10);
              $table->string('town',50);
            });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::drop('locations');
  }

}

?>