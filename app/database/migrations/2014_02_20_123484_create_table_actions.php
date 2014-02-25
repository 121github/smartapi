<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableActions extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('actions', function($table) {
            $table->increments('id');
            $table->integer('record_id')->unsigned();
            $table->integer('record_state_id')->unsigned()->nullable();
            $table->integer('outcome_id')->unsigned()->unsigned()->nullable();
            $table->integer('user_id')->unsigned()->unsigned()->nullable();
            $table->integer('contact_id')->unsigned()->unsigned()->nullable();
            $table->dateTime('nextcall')->nullable();
            $table->string('comments',255);
            $table->timestamps();
            $table->foreign('record_id')->references('id')->on('records')->onDelete('cascade');
            $table->foreign('record_state_id')->references('id')->on('record_states')->onDelete('set null');
            $table->foreign('outcome_id')->references('id')->on('outcomes')->onDelete('set null');
            $table->foreign('contact_id')->references('id')->on('contacts')->onDelete('set null');
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
		Schema::drop('actions');
	}

}
?>