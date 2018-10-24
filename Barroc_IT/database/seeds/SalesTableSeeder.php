<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class SalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,10) as $index) {
            DB::table('tbl_companies')
                ->insert([
                    'streetname1' => $faker->streetName,
                    'housenumber1' => $faker->buildingNumber,
                    'houseletter1' => $faker->randomLetter,
                    'city1' => $faker->city,
                    'streetname2'  =>$faker->streetName,
                    'housenumber2' => $faker->buildingNumber,
                    'houseletter2' => $faker->randomLetter,
                    'city2' => $faker->city,
                    'faxnumber' => $faker->phoneNumber,
                    'creditworthy' => $faker->boolean

                ]);
        }

    }
}
