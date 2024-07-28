<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; #追記
use DateTime; #追記

class CategoryPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('category_posts')->insert([
            'post_id'=>1,
            'tag_id'=>1,
            ]); //
            
        DB::table('category_posts')->insert([
            'post_id'=>2,
            'tag_id'=>3,
            ]); //
            
        DB::table('category_posts')->insert([
            'post_id'=>3,
            'tag_id'=>3,
            ]); //
    }
}
