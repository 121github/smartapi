<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRecords extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('records', function($table) {
            $table->increments('id');
            $table->integer('record_state_id')->unsigned()->nullable()->default(1);;
            $table->integer('last_outcome_id')->unsigned()->nullable()->default(null);
            $table->dateTime('next_action')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('record_state_id')->references('id')->on('record_states')->onDelete('set null')->onUpdate('no action');
            $table->foreign('last_outcome_id')->references('id')->on('outcomes')->onDelete('set null')->onUpdate('no action');;
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('records');
	}

}
