<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePlanner extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('planner', function($table) {
            $table->increments('id');
            $table->integer('record_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->dateTime('date');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('record_id')->references('id')->on('records')->onDelete('cascade')->onUpdate('no action');;
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('no action');;
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('planner');
	}

}
?>