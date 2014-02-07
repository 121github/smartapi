<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedRolePermissionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('role_permissions')->insert(array(
            // User
            array(
                'role_id'       => 1,
                'permission_id' => 1 // view_dashboard
            ),
            // Admin
            array(
                'role_id'       => 2, 
                'permission_id' => 1 // view_dashboard
            ),
            array(
                'role_id'       => 2, // Admin
                'permission_id' => 2 // view_users
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
		DB::table('role_permissions')->delete();
	}

}
