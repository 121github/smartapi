<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCampaignUsers extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('campaign_users', function($table) {
              $table->increments('id');
              $table->integer('user_id')->unsigned();
              $table->integer('campaign_id')->unsigned();
              $table->unique(array('user_id', 'campaign_id'));
              $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('no action');;
              $table->foreign('campaign_id')->references('id')->on('campaigns')->onDelete('cascade')->onUpdate('no action');;
            });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::drop('campaign_users');
  }

}

?>