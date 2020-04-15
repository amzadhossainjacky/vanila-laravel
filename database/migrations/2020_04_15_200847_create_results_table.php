<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('examName');
            $table->string('examType');
            $table->double('marks', 8, 2);
            $table->bigInteger('cid')->unsigned();

            $table->foreign('cid')->references('id')->on('courses')
            ->onDelete('cascade');
            $table->bigInteger('sid')->unsigned();
            $table->foreign('sid')->references('id')->on('registrations')
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
        Schema::dropIfExists('results');
    }
}
