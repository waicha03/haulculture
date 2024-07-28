<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; #追記
use DateTime; #追記

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('prices')->insert([
            'price'=>'~5,000円',
             ]);////
        //
        DB::table('prices')->insert([
            'price'=>'5,000~10,000円',
             ]);////
             
        DB::table('prices')->insert([
            'price'=>'10,000~20,000円',
             ]);////
    }
}
