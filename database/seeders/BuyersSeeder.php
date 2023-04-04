<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as faker;
class BuyersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

    	for($i = 1; $i <= 30; $i++){

    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('buyers')->insert([
    			'name' => $faker->name,
    			'age' => $faker->numberBetween(18,60),
    			'address' => $faker->address,
                'gender_id' => $faker->numberBetween(1,2),
    		]);

    	}
    }
}
