<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            $table->string('comment');

            $table->unsignedBigInteger('sub_tutor_id');
            $table->foreign('sub_tutor_id')
                    ->references('id')
                    ->on('sub_tutors')
                    ->onDelete('cascade');

            $table->unsignedBigInteger('userparent_id');
            $table->foreign('userparent_id')
                    ->references('id')
                    ->on('userparents')
                    ->onDelete('cascade');
            $table->date('date');
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
        Schema::dropIfExists('feedback');
    }
}
