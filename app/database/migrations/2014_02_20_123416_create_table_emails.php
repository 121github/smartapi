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
              $table->string('name', 255);
              $table->string('description', 255);
               $table->string('subject', 255);
              $table->text('body');
              $table->string('default_to', 255);
              $table->string('default_from', 255);
              $table->string('default_bcc', 255);
              $table->string('default_cc', 255);
              $table->string('smtp_server', 255);
              $table->integer('smtp_port')->default(25);
              $table->tinyInteger('encryption')->default(0);
              $table->string('username', 255);
              $table->string('password', 255);
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