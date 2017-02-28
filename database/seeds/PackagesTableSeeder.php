<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('packages')->insert([
            'package_name' => "TT&T - VLL",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('packages')->insert([
            'package_name' => "TT&T - Leasedline",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('packages')->insert([
            'package_name' => "TT&T - IP VPN",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('packages')->insert([
            'package_name' => "Triple T BB - Leasedline",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('packages')->insert([
            'package_name' => "Triple T BB - IP VPN",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('packages')->insert([
            'package_name' => "Triple T BB - IDC",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('packages')->insert([
            'package_name' => "Triple T BB - Backup",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('packages')->insert([
            'package_name' => "Triple T BB - Bundle",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
