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
        for($i = 0; $i < 100; $i++) {
            $this->call(ContactsTableSeeder::class);
            $this->call(CompaniesTableSeeder::class);
            $this->call(ProjectsTableSeeder::class);
            $this->call(InvoicesTableSeeder::class);
            $this->call(AppointmentsTableSeeder::class);
        }
    }
}
