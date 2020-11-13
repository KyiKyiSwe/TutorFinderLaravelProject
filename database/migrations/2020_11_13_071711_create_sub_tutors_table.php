<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubTutorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_tutors', function (Blueprint $table) {
            $table->id();
            $table->string('fee');
            $table->text('course');
            $table->string('hours');

            $table->unsignedBigInteger('tutor_id');
            $table->foreign('tutor_id')
                    ->references('id')
                    ->on('tutors')
                    ->onDelete('cascade');

            $table->unsignedBigInteger('subject_id');
            $table->foreign('subject_id')
                    ->references('id')
                    ->on('subjects')
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
        Schema::dropIfExists('sub_tutors');
    }
}
