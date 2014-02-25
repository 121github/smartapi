<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCampaigns extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('campaigns', function($table) {
              $table->increments('id');
              $table->string('name',20);
              $table->string('description',255);
             $table->timestamps();
             $table->softDeletes();
            });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::drop('campaigns');
  }

}

?>