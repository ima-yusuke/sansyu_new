<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Benefit;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('benefits', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->timestamps();
        });

        $initial_value =[
            ["title"=>"給与"],
            ["title"=>"手当(月額)"],
            ["title"=>"昇給・賞与"],
            ["title"=>"休日・休暇"],
            ["title"=>"福利厚生"],
            ["title"=>"試用期間"],
            ["title"=>"その他"],
        ];

        $save_initial_value =Benefit::insert($initial_value);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('benefits');
    }
};
