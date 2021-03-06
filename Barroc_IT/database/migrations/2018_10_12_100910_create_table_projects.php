<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProjects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('project_id'); // PK
            $table->unsignedInteger('contact_id'); // FK
            $table->unsignedInteger('company_id'); // FK
            $table->string('title');
            $table->integer('project_status');
            $table->dateTime('death_line');
            $table->dateTime('start_time');

            $table->timestamps();
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
