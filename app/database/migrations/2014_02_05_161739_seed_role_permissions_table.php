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
                'permission_id' => 1
            ),
            array(
                'role_id'       => 1,
                'permission_id' => 2
            ),
            array(
                'role_id'       => 1,
                'permission_id' => 3
            ),
            array(
                'role_id'       => 1,
                'permission_id' => 4
            ),
            array(
                'role_id'       => 1,
                'permission_id' => 5
            ),
            array(
                'role_id'       => 1,
                'permission_id' => 6
            ),
            // Admin
            array(
                'role_id'       => 2, 
                'permission_id' => 1
            ),
            array(
                'role_id'       => 2,
                'permission_id' => 2
            ),
            array(
                'role_id'       => 2,
                'permission_id' => 3
            ),
            array(
                'role_id'       => 2,
                'permission_id' => 4
            ),
            array(
                'role_id'       => 2,
                'permission_id' => 5
            ),
            array(
                'role_id'       => 2,
                'permission_id' => 6
            ),
            array(
                'role_id'       => 2,
                'permission_id' => 7
            ),
            array(
                'role_id'       => 2,
                'permission_id' => 8
            ),
            array(
                'role_id'       => 2,
                'permission_id' => 9
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
