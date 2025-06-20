<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    { 
        Schema::create('quizzes', function (Blueprint $table) {
       $table->id();
       $table->foreignId('course_id')->constrained()->onDelete('cascade');
       $table->string('question');
       $table->string('option_a');
       $table->string('option_b');
       $table->string('option_c');
       $table->string('option_d');
       $table->string('correct_answer');
       $table->timestamps();
   });
    }

    public function down(): void
    {
        Schema::dropIfExists('quizzes');
    }
};