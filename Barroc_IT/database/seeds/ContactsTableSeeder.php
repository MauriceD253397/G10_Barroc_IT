<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('nl_NL');


        DB::table('contacts')
            ->insert([
                'contact_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'adress' => $faker->address,
                'zipcode' => $faker->postcode,
                'residence' => $faker->city,
                'telephone_number' => $faker->phoneNumber,
                'fax_number' => $faker->phoneNumber,
                'email' => $faker->email,
                'bankrekeningnummer' => $faker->bankAccountNumber,
                'saldo' => 0,
                'limiet_rood' => random_int(0, 10000),
                'grootboeknummer' => random_int(0, 100000000),
                'creditworthy' => random_int(0, 1)
                ]);
    }
}
