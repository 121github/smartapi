<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRecordTypes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('record_types', function($table) {
            $table->increments('id');
            $table->string('name')->unique();
        });
        
        DB::table('record_types')->insert(array(
            array(
                'name'        => 'Company',
            ),
            array(
                'name'        => 'Contact',
            )
        ));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('record_types');
	}

}


