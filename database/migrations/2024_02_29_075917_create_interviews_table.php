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
        Schema::create('interviews', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("hire_year");
            $table->string("school");
            $table->string("department");
            $table->string("faculty");
            $table->string("job_dpt");
            $table->longText("question_1");
            $table->longText("question_2");
            $table->longText("question_3");
            $table->longText("question_4");
            $table->longText("question_5");
            $table->longText("question_6");
            $table->longText("question_7");
            $table->longText("question_8");
            $table->string("path_1");
            $table->string("path_2");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interviews');
    }
};
