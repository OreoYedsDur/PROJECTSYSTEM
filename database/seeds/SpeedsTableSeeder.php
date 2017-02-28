<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class SpeedsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('speeds')->insert([
            'speed_name' => "0 - N/A",
            'speed_val' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('speeds')->insert([
            'speed_name' => "64 k",
            'speed_val' => 64,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('speeds')->insert([
            'speed_name' => "10 M",
            'speed_val' => 10240,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('speeds')->insert([
            'speed_name' => "100 M",
            'speed_val' => 102400,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('speeds')->insert([
            'speed_name' => "1 G",
            'speed_val' => 1048576,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
