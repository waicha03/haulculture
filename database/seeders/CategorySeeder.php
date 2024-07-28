<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; #追記
use DateTime; #追記

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'category'=>'ストリート系',
             ]);////
             
        DB::table('categories')->insert([
            'category'=>'アメカジ系',
             ]);////
             
        DB::table('categories')->insert([
            'category'=>'ヴィンテージ系',
             ]);////     
             
        DB::table('categories')->insert([
            'category'=>'リメイク系',
             ]);////
             
        DB::table('categories')->insert([
            'category'=>'カジュアル系',
             ]);////
    }
}
