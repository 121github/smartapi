<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAttachments extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('attachments', function($table) {
              $table->increments('id');
              $table->integer('email_id')->unsigned();
              $table->string('name',50);
              $table->string('filename',255);
              $table->string('filepath',255);           
              $table->softDeletes();
              $table->foreign('email_id')->references('id')->on('emails')->onDelete('cascade')->onUpdate('no action');;
            });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::drop('attachments');
  }

}

?>