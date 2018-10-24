<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class AppointmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = \App\Project::all()->pluck('project_id')->toArray();
        $faker = Faker::create('nl_NL');


        DB::table('appointments')
            ->insert([
                'project_id' => $faker->randomElement($projects),
                'appointment_name' => $faker->title,
                'date_of_action' => $faker->dateTime,
                'last_contact_date' => $faker->dateTime,
                'next_action' => $faker->dateTime,
                'appointment_description' => $faker->text,
                'sale_percentage' => random_int(0,30)
            ]);
    }
}
