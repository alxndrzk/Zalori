<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use faker\Factory as faker;
use Illuminate\Support\Facades\DB;

class AdminsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        for($i = 1; $i<=5; $i++){
            DB::table('admins')->insert([
                'name'=> $faker->name,
                'addres'=> $faker->address,
                'email'=> $faker->email,
                
            ]);
        }
    }
}
