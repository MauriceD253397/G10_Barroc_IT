<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAppointments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->increments('appointment_number'); // PK van appointments FK van companies
            $table->unsignedInteger('project_id'); // FK
            $table->string('appointment_name');
            $table->dateTime('date_of_action');
            $table->dateTime('last_contact_date');
            $table->dateTime('next_action');
            $table->string('appointment_description');
            $table->integer('sale_percentage');
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
