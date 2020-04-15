<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChoosecoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('choosecourses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('fees');
            $table->integer('paid');
            $table->bigInteger('cid')->unsigned();
            $table->foreign('cid')->references('id')->on('courses')
            ->onDelete('cascade');
            $table->bigInteger('uid')->unsigned();
            $table->foreign('uid')->references('id')->on('registrations')
            ->onDelete('cascade');
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
        Schema::dropIfExists('choosecourses');
    }
}
