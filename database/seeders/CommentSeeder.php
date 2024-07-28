<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; #追記
use DateTime; #追記

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('comments')->insert([
            'user_id'=>1,
            'post_id'=>1,
            'title'=>null,
            'comment'=>'あああああ',
            'review'=>3
            ]);//
        
        
        //
    }
}
