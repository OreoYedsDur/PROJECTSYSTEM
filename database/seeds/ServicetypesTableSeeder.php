<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class ServicetypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('servicetypes')->insert([
            'servicetype_name' => "VPN",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('servicetypes')->insert([
            'servicetype_name' => "IAD",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('servicetypes')->insert([
            'servicetype_name' => "OFC",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
