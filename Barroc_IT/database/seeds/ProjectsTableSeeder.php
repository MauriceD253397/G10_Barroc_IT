<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contact = \App\Contact::all()->pluck('contact_id')->toArray();
        $companies = \App\Company::all()->pluck('company_id')->toArray();
        $faker = Faker::create('nl_NL');


        DB::table('projects')
            ->insert([
                'contact_id' => $faker->randomElement($contact),
                'company_id' => $faker->randomElement($companies),
                'title' => $faker->domainName,
                'project_status' => 0,
                'death_line' => $faker->dateTime,
                'start_time' => $faker->dateTime
                ]);
    }
}
