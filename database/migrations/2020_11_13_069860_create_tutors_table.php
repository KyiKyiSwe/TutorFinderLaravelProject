<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutors', function (Blueprint $table) {
            $table->id();
           
            $table->text('photo');
            
            $table->string('phoneno');
            $table->string('schoolname');
            $table->string('qualification');
            $table->string('address');
            $table->string('city');

            $table->unsignedBigInteger('level_id');
            $table->foreign('level_id')
                    ->references('id')
                    ->on('levels')
                    ->onDelete('cascade');

            $table->unsignedBigInteger('grade_id');
            $table->foreign('grade_id')
                    ->references('id')
                    ->on('grades')
                    ->onDelete('cascade');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
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
        Schema::dropIfExists('tutors');
    }
}
