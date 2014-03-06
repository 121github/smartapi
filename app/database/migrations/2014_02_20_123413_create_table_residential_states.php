<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableResidentialStates extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('residential_states', function($table) {
              $table->increments('id');
              $table->string('state',20);
            });
            
            		DB::table('residential_states')->insert(array(
            array(
                'state'        => 'Renting',
            ),
            array(
                'state'        => 'Home owner with mortgage',
            ),
            array(
                'state'        => 'Home owner without mortgage',
            ),
            array(
                'state'        => 'Living with parents',
            ),
            array(
                'state'        => 'Other'
            )
        ));
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::drop('residential_states');
  }

}

?>