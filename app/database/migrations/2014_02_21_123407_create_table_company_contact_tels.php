<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCompanyContactTels extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('company_contact_tels', function($table) {
              $table->increments('id');
              $table->integer('tel_type_id')->unsigned();
              $table->integer('company_contact_id')->unsigned();
              $table->tinyInteger('ctps')->default('0');
              $table->string('tel', 20);
              $table->foreign('company_contact_id')->references('id')->on('company_contacts')->onDelete('cascade')->onUpdate('no action');;
              $table->foreign('tel_type_id')->references('id')->on('tel_types')->onDelete('cascade')->onUpdate('no action');;
            });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::drop('company_contact_tels');
  }

}

?>