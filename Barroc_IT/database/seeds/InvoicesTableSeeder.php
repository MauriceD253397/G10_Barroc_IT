<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class InvoicesTableSeeder extends Seeder
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


        DB::table('invoices')
            ->insert([
                'project_id' => $faker->randomElement($projects),
                'btw_amount' => 21,
                'factuur_status' => random_int(0,1),
                'factuur_saldo' => random_int(50, 2000)
                ]);
    }
}
