<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->string('course1')->nullable();
            $table->string('course2')->nullable();
            $table->string('course3')->nullable();
            $table->string('course4')->nullable();
            $table->string('course5')->nullable();
            $table->string('course6')->nullable();
            $table->string('course7')->nullable();
            $table->string('course8')->nullable();
            $table->string('course9')->nullable();
            $table->string('course10')->nullable();
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
        Schema::dropIfExists('courses');
    }
}
