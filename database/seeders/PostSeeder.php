<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; #追記
use DateTime; #追記

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('posts')->insert([
            'title'=>'BIG TIME',
            'body'=>"aaa\naaa",
            'image_path'=>null
             ]);//// //
             
         DB::table('posts')->insert([
            'title'=>'NOIL',
            'body'=>"bbb\nbbb",
            'image_path'=>null
             ]);//// // 
             
         DB::table('posts')->insert([
            'title'=>'Ruby Tuesday',
            'body'=>"ccc",
            'image_path'=>null
             ]);//// //
             
         DB::table('posts')->insert([
            'title'=>'MUMU',
            'body'=>"ddd",
            'image_path'=>null
             ]);//// //
             
         DB::table('posts')->insert([
            'title'=>'Florida',
            'body'=>"eee\neee",
            'image_path'=>null
             ]);//// //
    }
}
