<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_post' , function (Blueprint $table){
            $table->increments('id');
            $table->string('Studentnumber');
            $table->string('Fname');
            $table->string('Mname');
            $table->string('Lname');
            $table->string('Course');
            $table->string('Address');
            $table->string('Guardian');
            $table->string('Contactnumber');
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
        Schema::drop('blog_post');
    }
}
