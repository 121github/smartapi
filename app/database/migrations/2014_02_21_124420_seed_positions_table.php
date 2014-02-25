<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedPositionsTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    DB::table('positions')->insert(array(
        array(
            'id' => '1',
            'name' => 'Managing Director',
            'rank' => 1
        ),
                array(
            'id' => '2',
            'name' => 'Marketing Manager',
            'rank' => 5
        ),
                array(
            'id' => '3',
            'name' => 'Recepionist',
            'rank' => 7
        ),
        array(
            'id' => '4',
            'name' => 'Sales Manager',
            'rank' => 5
        )
    ));
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    DB::table('positions')->delete();
  }

}
