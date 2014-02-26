<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCampaignRecords extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('campaign_records', function($table) {
              $table->increments('id');
              $table->integer('campaign_id')->unsigned();
              $table->integer('record_id')->unsigned();
              $table->unique(array('record_id', 'campaign_id'));
              $table->foreign('record_id')->references('id')->on('records')->onDelete('cascade')->onUpdate('no action');
              $table->foreign('campaign_id')->references('id')->on('campaigns')->onDelete('cascade');
            });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::drop('campaign_records');
  }

}

?>