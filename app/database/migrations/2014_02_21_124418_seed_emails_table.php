<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedEmailsTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    DB::table('emails')->insert(array(
        array(
            'id' => '1',
            'type' => null,
            'name' => 'Information Pack',
            'description' => 'The information email about the products being sold',
            'subject' => 'See what we have to offer!',
            'body' => '<p>Dear Customer</p><p>Please find the information about our products in the attached brochure</p><p>Kind Regards<br>Example.com</p>',
            'default_to' => 'bradf@121customerinsight.co.uk',
            'default_from' => 'bradf@121customerinsight.co.uk',
            'default_bcc' => '',
            'default_cc' => '',
            'smtp_server' => 'localhost',
            'smtp_port' => '25'
        )
    ));
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    DB::table('emails')->delete();
  }

}
