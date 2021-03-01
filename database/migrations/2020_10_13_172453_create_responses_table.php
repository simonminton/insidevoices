<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responses', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('company_id')->nullable();
            $table->string('company')->nullable();
            $table->string('location')->nullable();
            $table->text('question1')->nullable();
            $table->integer('response1')->nullable();
            $table->text('story1')->nullable();
            $table->text('question2')->nullable();
            $table->integer('response2')->nullable();
            $table->text('story2')->nullable();
            $table->text('question3')->nullable();
            $table->integer('response3')->nullable();
            $table->text('story3')->nullable();
            $table->text('question4')->nullable();
            $table->integer('response4')->nullable();
            $table->text('story4')->nullable();
            $table->text('question5')->nullable();
            $table->integer('response5')->nullable();
            $table->text('story5')->nullable();
            $table->text('question6')->nullable();
            $table->integer('response6')->nullable();
            $table->text('story6')->nullable();
            $table->string('role')->nullable();
            $table->integer('timeAtCompany')->nullable();
            $table->string('email')->nullable();
            $table->string('gender')->nullable();
            $table->string('race')->nullable();
            $table->string('age')->nullable();
            $table->string('religion')->nullable();
            $table->string('disability')->nullable();
            $table->ipAddress('ip')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('responses');
    }
}
