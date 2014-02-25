<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedCompanyStatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('company_states')->insert(array(
            array(
                'id'        => '1',
                'state' => 'Trading'
            ),
            array(
                'id'        => '2',
                'state' => 'Dissolved'
            ),
                    array(
                'id'        => '3',
                'state' => 'In Liquidation'
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
		DB::table('company_states')->delete();
	}

}
