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
        Schema::table('job_openings', function (Blueprint $table) {
            //
            $table->string("job_target")->nullable()->change();
            $table->string("recruit_number")->nullable()->change();
            $table->longText("ideal_emp")->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('job_openings', function (Blueprint $table) {
            //
            $table->string("job_target")->nullable(false)->change();
            $table->string("recruit_number")->nullable(false)->change();
            $table->longText("ideal_emp")->nullable(false)->change();
        });
    }
};
