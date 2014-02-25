<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedRecordStatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('record_states')->insert(array(
            array(
                'id'        => '1',
                'state' => 'New'
            ),
            array(
                'id'        => '2',
                'state' => 'In Progress'
            ),
                    array(
                'id'        => '3',
                'state' => 'Complete'
            ),
                   array(
                'id'        => '4',
                'state' => 'Removed'
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
		DB::table('record_states')->delete();
	}

}
