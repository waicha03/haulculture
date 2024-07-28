<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; #追記
use DateTime; #追記

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('tags')->insert([
            'category_id'=>2,
            'area_id'=>4,
             'price_id'=>3,
            ]);// //
            
       DB::table('tags')->insert([
            'category_id'=>1,
            'area_id'=>3,
             'price_id'=>2,
            ]);// //
            
        DB::table('tags')->insert([
            'category_id'=>3,
            'area_id'=>1,
             'price_id'=>1,
            ]);// //    
    }
}
