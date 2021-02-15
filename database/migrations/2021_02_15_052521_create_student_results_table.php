<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_results', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->integer('ct1h');
            $table->integer('ct2h');
            $table->integer('ct3h');
            $table->integer('half');
            $table->integer('ct1f');
            $table->integer('ct2f');
            $table->integer('ct3f');
            $table->integer('final');
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
        Schema::dropIfExists('student_results');
    }
}
