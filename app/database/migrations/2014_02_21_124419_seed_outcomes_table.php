<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedOutcomesTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    DB::table('outcomes')->insert(array(
        array(
            'id' => '1',
            'name' => 'No Answer',
            'description' => 'Nobody picked up the phone so leave it in the pot to try again later',
            'email_id' => null,
            'record_state_id' => 2,
            'reassign' => null
        ),
        array(
            'id' => '2',
            'name' => 'Dead Line',
            'description' => 'Line appears to be dead, remove from records',
            'email_id' => null,
            'record_state_id' => 4,
            'reassign' => null
        ),
        array(
            'id' => '3',
            'name' => 'No Interest',
            'description' => 'Person not interested, remove from records',
            'email_id' => null,
            'record_state_id' => 4,
            'reassign' => null
        ),
        array(
            'id' => '4',
            'name' => 'Call Back',
            'description' => 'Set a call back date to try again later',
            'email_id' => null,
            'record_state_id' => 2,
            'reassign' => null
        ),
        array(
            'id' => '5',
            'name' => 'Unavailable',
            'description' => "The person was unavailable to take the call but we can try again later",
            'email_id' => null,
            'record_state_id' => 2,
            'reassign' => null
        ),
        array(
            'id' => '6',
            'name' => 'Wrong Number',
            'description' => 'The number we have on the record is wrong. Remove from the pot',
            'email_id' => null,
            'record_state_id' => 4,
            'reassign' => null
        ),
        array(
            'id' => '7',
            'name' => 'Sale',
            'description' => 'A sale was made, this record can be marked as complete',
            'email_id' => null,
            'record_state_id' => 3,
            'reassign' => null
        ),
        array(
            'id' => '8',
            'name' => 'Duplicate',
            'description' => 'This record is a duplicate, remove it from the pot',
            'email_id' => null,
            'record_state_id' => 4,
            'reassign' => null
        ),
         array(
            'id' => '9',
            'name' => 'Email Info',
            'description' => 'Send out an information pack.',
            'email_id' => 1,
            'record_state_id' => 2,
            'reassign' => null
        )
    ));
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    DB::table('outcomes')->delete();
  }

}
