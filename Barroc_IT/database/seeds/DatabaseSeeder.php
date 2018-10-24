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

         $this->call(ContactsTableSeeder::class);
         $this->call(ProjectsTableSeeder::class);
         $this->call(InvoicesTableSeeder::class);
         $this->call(AppointmentsTableSeeder::class);
         $this->call(CompaniesTableSeeder::class);
    }
}
