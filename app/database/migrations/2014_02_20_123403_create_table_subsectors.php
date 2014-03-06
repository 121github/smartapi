<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSubsectors extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('subsectors', function($table) {
            $table->increments('id');
            $table->integer('sector_id')->unsigned();
            $table->string('name');
            $table->foreign('sector_id')->references('id')->on('sectors')->onDelete('cascade');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('subsectors');
	}

}
?>