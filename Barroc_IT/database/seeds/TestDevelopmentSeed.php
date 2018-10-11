<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestDevelopmentSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_projects')
            ->insert([
                'title' => str_random(10),
                'status' => 'indevelopment',
                'start_date' => '2018-10-11',
                'death_line' => '2018-11-11'
            ]);
    }
}
