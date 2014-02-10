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
                'permission'  => 'access_app',
                'description' => 'Every user must be assigned this permission'
            ),
            array(
                'permission'  => 'access_search',
                'description' => 'Required to search leads'
            ),
            array(
                'permission'  => 'access_appointments',
                'description' => 'Required to access appointments'
            ),
            array(
                'permission'  => 'access_messages',
                'description' => 'Required to access messages'
            ),
            array(
                'permission'  => 'access_planner',
                'description' => 'Required to access the planner'
            ),
            array(
                'permission'  => 'access_settings',
                'description' => 'Required to accesss account settings'
            ),
            array(
                'permission'  => 'access_users',
                'description' => 'Required to access system users'
            ),
            array(
                'permission'  => 'create_user',
                'description' => 'Required to add a new user to the system'
            ),
            array(
                'permission'  => 'access_reporting',
                'description' => 'Required to access reporting'
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
