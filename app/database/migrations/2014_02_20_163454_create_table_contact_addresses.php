<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableContactAddresses extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contact_addresses', function($table) {
            $table->increments('id');
            $table->string('address_1',50);
            $table->string('address_2',50);
            $table->string('address_3',50);
            $table->string('town',50);
            $table->string('county',50);
            $table->string('country',50);
            $table->string('postcode',50);
            $table->integer('contact_id')->unsigned();
            $table->integer('location_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('contact_id')->references('id')->on('contacts')->onDelete('cascade')->onUpdate('no action');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('company_addresses');
	}

}
?>