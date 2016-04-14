<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class BreedsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('breeds')->insert([
			['id' => 1, 'name' => 'Domestic'],
			['id' => 2, 'name' => 'Persian'],
			['id' => 3, 'name' => 'Siamese'],
			['id' => 4, 'name' => 'Abyssinian'],
		]);
	}

}
