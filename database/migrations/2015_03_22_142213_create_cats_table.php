<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cats', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->date('date_of_birth');
			$table->integer('breed_id')->unsigned()->nullable();
			$table->timestamps();
			$table->foreign('breed_id')->references('id')->on('breeds');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cats');
	}

}
