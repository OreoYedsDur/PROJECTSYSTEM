<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            'project_name' => "IPV - Main Traffic",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('projects')->insert([
            'project_name' => "IPV - Backup Traffic",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('projects')->insert([
            'project_name' => "IPV - International Traffic",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('projects')->insert([
            'project_name' => "Main Traffic - Scenario Backup",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('projects')->insert([
            'project_name' => "Backup Traffic - Scenario Backup",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('projects')->insert([
            'project_name' => "Backup Link - Total Traffic",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
