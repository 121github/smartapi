<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedPermissionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('permissions')->insert(array(
            array(
                'permission'  => 'view_dashboard',
                'description' => 'Required to view the dashboard. As this is the entry point for the application every user must be assigned this permission'
            ),
            array(
                'permission'  => 'view_users',
                'description' => 'Required to view system users'
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
		DB::table('permissions')->delete();
	}

}
