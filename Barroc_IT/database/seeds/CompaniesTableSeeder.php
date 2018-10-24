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
        $contact_id = \App\Contact::all()->pluck('contact_id')->toArray();
        $faker = Faker::create('nl_NL');


        DB::table('companies')
            ->insert([
                'contact_id' => $faker->randomElement($contact_id),
                'company_name' => $faker->company
                ]);
    }
}
