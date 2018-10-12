<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class TestDevelopmentSeed extends Seeder
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
            DB::table('tbl_projects')
                ->insert([
                    'title' => $faker->city,
                    'status' => 'indevelopment',
                    'start_date' => $faker->dateTimeThisMonth(),
                    'death_line' => $faker->dateTimeThisMonth()
                ]);
        }

    }
}
