<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert([
            'location_type' => "Head Office",
            'location_des' => "Head Office CMRU",
            'location_address' => "Chiang Mai",
            'province_id' => 38,
            'customer_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
