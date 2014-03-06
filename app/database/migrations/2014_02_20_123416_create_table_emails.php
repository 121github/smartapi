<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEmails extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('emails', function($table) {
              $table->increments('id');
              $table->integer('campaign_id')->nullable()->default(null)->unsigned();
              $table->integer('type')->nullable()->default(null)->unsigned();
              $table->string('name');
              $table->string('description');
               $table->string('subject');
              $table->text('body');
              $table->string('default_to');
              $table->string('default_from');
              $table->string('default_bcc');
              $table->string('default_cc');
              $table->string('smtp_server');
              $table->integer('smtp_port')->default(25);
              $table->tinyInteger('encryption')->default(0);
              $table->string('username');
              $table->string('password');
              $table->foreign('campaign_id')->references('id')->on('campaigns')->onDelete('set null');
            });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::drop('emails');
  }

}

?>