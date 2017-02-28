<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class SalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sales')->insert([
            'sale_name' => "Keattisak  Audkheaw",
            'sale_tel' => "080-2284075",
            'sale_email' => "Okeattisak@hotmail.com",
            'sale_line' => "Oreomarioz",
            'sale_address' => "107 M.4 T.Mungkeaw A.Maerim Chiangmai 50180",
            'groupsale_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
