<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAppointments extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('appointments', function($table) {
            $table->increments('id');
            $table->string('title',50);
            $table->string('description',50);
            $table->dateTime('start_time');
            $table->dateTime('endtime');
            $table->integer('record_id')->unsigned();
            $table->integer('user_id')->nullable()->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('record_id')->references('id')->on('records')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('appointments');
	}

}
?>