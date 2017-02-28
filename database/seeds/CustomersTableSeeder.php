<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            'customer_name' => "CMRU",
            'customer_tel' => "053-379061",
            'customer_des' => "มหาวิทยาลัยราชภัฏเชียงใหม",
            'sale_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
