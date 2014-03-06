<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMaritalStates extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('marital_states', function($table) {
              $table->increments('id');
              $table->string('state',20);
            });
            
            		DB::table('marital_states')->insert(array(
            array(
                'state'        => 'Married',
            ),
            array(
                'state'        => 'Engaged',
            ),
            array(
                'state'        => 'Divorced',
            ),
            array(
                'state'        => 'Single',
            ),
            array(
                'state'        => 'Seperated'
            )
        ));
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::drop('marital_states');
  }

}

?>