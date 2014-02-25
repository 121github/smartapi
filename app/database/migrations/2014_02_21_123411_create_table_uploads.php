<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUploads extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('uploads', function($table) {
              $table->increments('id');
              $table->integer('record_id')->unsigned();
               $table->string('name',50);
               $table->string('description',150);
               $table->string('filename',150);
               $table->string('filepath',150);
               $table->integer('upload_type_id')->unsigned()->nullable();
               $table->timestamps();
               $table->softDeletes();
               $table->foreign('record_id')->references('id')->on('records')->onDelete('cascade');
               $table->foreign('upload_type_id')->references('id')->on('upload_types')->onDelete('set null');
            });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::drop('uploads');
  }

}

?>