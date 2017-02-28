<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(GroupsalesTableSeeder::class);
        $this->call(SalesTableSeeder::class);
        $this->call(CustomersTableSeeder::class);

        $this->call(PackagesTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(ServicetypesTableSeeder::class);
        $this->call(SpeedsTableSeeder::class);
        // Provinces Wait
        $this->call(LocationsTableSeeder::class);

    }
}
