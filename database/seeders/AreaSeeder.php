<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; #追記
use DateTime; #追記

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('areas')->insert([
            'area'=>'下北沢駅北',
            ]);//
            
        DB::table('areas')->insert([
            'area'=>'下北沢駅南',
             ]);//
             
        DB::table('areas')->insert([
            'area'=>'下北沢駅東',
             ]);//
             
        DB::table('areas')->insert([
            'area'=>'下北沢駅西',
             ]);//
             
    }
}
