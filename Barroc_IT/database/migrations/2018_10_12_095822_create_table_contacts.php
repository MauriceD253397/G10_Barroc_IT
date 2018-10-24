<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableContacts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('contact_id'); // PK
            $table->string('contact_name');
            $table->string('last_name');
            $table->string('adress');
            $table->string('zipcode');
            $table->string('residence');
            $table->string('telephone_number');
            $table->string('fax_number');
            $table->string('email');
            $table->string('bankrekeningnummer');
            $table->integer('saldo');
            $table->integer('limiet_rood');
            $table->string('grootboeknummer');
            $table->boolean('creditworthy');
            $table->timestamps();
        });   //
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
