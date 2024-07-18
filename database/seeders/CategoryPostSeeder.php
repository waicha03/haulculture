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
            'name'=>'abc',
            'email'=>'abc@gmail.com',
            'password'=> Hash::make('abcd1234'),
            ]); //
    }
}
