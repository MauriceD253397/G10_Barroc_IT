<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            // !!!! THIS IS A TEMPORARY MIGRATION TABLE MAN !!!!
            $table->increments('id');
            $table->string('companyname');
            $table->string('contactname');
            $table->string('streetname1');
            $table->string('housenumber1');
            $table->string('houseletter1');
            $table->string('city1');
            $table->string('streetname2');
            $table->string('housenumber2');
            $table->string('houseletter2');
            $table->string('city2');
            $table->string('faxnumber');
            $table->boolean('creditworthy');
            $table->timestamps();
            // !!!! THIS IS A TEMPORARY MIGRATION TABLE MAN !!!!
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
