<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id();
            $table->string('enroll_no')->nullable();
            $table->bigInteger('batch_id')->unsigned()->nullable();
            $table->bigInteger('student_id')->unsigned()->nullable();
            $table->date('join_date')->nullable();
            $table->double('fee')->nullable();
            $table->foreign('batch_id')->references('id')->on('batches');
            $table->foreign('student_id')->references('id')->on('students');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrollments');
    }
};
