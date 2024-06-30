<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormSubmissionsTable extends Migration
{
    public function up()
    {
        Schema::create('create_form_submissions', function (Blueprint $table) {
            $table->id();
            $table->string('problem_statement');
            $table->string('serial_no');
            $table->string('active');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('create_form_submissions');
    }
}
