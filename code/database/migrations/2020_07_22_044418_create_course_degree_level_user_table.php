<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseDegreeLevelUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_degree_level_user', function (Blueprint $table) {
            $table->id();
            
            $table->integer('course_id')->unsigned();
            $table->foreign('course_id')->references('id')->on('courses');

            $table->integer('level_id')->unsigned();
            $table->foreign('level_id')->references('id')->on('levels');

            $table->integer('degree_id')->unsigned();
            $table->foreign('degree_id')->references('id')->on('degrees');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

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
        Schema::dropIfExists('course_degree_level_user');
    }
}