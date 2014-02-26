<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCompanySubsectors extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('company_subsectors', function($table) {
            $table->integer('company_id')->unsigned();
            $table->integer('subsector_id')->unsigned();
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade')->onUpdate('no action');;
            $table->foreign('subsector_id')->references('id')->on('subsectors')->onDelete('cascade')->onUpdate('no action');;
            $table->index(array('company_id', 'subsector_id'));
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('company_subsectors');
	}

}
?>