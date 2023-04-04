<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $list = ["Pria", "Wanita"];
        for($i = 0; $i < count($list); $i++){
            DB::table('genders')->insert([
                'gender' => $list[$i],
            ]);
        }
    }
}
