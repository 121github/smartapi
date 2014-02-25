<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedTelTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('tel_types')->insert(array(
            array(
                'id'        => '1',
                'type' => 'Mobile'
            ),
            array(
                'id'        => '2',
                'type' => 'Landline'
            ),
                    array(
                'id'        => '3',
                'type' => 'Work'
            ),
                   array(
                'id'        => '4',
                'type' => 'Home'
            ),
                   array(
                'id'        => '5',
                'type' => 'Reception'
            ),
                           array(
                'id'        => '6',
                'type' => 'Direct'
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
		DB::table('tel_types')->delete();
	}

}
