<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Category;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string("category_name");
            $table->timestamps();

        });

        $initial_value =[
            ["category_name"=>"インターンシップ情報"],
            ["category_name"=>"説明会情報"]
        ];

        $save_initial_value =Category::insert($initial_value);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
