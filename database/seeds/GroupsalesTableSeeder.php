<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class GroupsalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groupsales')->insert([
            'groupsale_name' => "TEST",
            'groupsale_des' => "TEST",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
