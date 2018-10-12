<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TestDevelopmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //this is fore testing stuff and not fore the final database
        Schema::create('tbl_projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('status');
            $table->date('start_date');
            $table->date('death_line');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
