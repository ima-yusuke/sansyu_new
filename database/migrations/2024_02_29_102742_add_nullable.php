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
        Schema::table('interviews', function (Blueprint $table) {
            //
            $table->string("department")->nullable()->change();
            $table->string("faculty")->nullable()->change();
            $table->string("title");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('interviews', function (Blueprint $table) {
            //
            $table->string("department")->nullable(false)->change();
            $table->string("faculty")->nullable(false)->change();
            $table->dropColumn('title');

        });
    }
};
