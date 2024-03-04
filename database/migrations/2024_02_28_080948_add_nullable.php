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
        //role(役職)はnull(空欄)可能に変更
        Schema::table('messages', function (Blueprint $table) {
            //
            $table->string("role")->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('messages', function (Blueprint $table) {
            //
            $table->string("role")->nullable(false)->change();
        });
    }
};
