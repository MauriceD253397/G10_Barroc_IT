<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = \App\Project::all()->pluck('project_id')->toArray();
        $appointment_number = \App\Appointment::all()->pluck('appointment_number')->toArray();
        $faker = Faker::create('nl_NL');


        DB::table('companies')
            ->insert([
                'appointment_number' => $faker->randomElement($appointment_number),
                'project_id' => $faker->randomElement($projects),
                'company_name' => $faker->company
                ]);
    }
}
