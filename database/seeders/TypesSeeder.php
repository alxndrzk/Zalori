<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run(): void
    {
        $list = ["baju", "sepatu", "kaos"];
        for($i = 0; $i < count($list); $i++){
            DB::table('types')->insert([
                'type' => $list[$i],
            ]);
        }
    }
}
