<<?php

use App\Models\Event;
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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->date("date");
            $table->string("title");
            $table->integer("category_id");
            $table->timestamps();
        });

        $initial_value =[
            ["date" =>"2024-12-15","title"=>"1day仕事体験実施中！","category_id"=>1],
            ["date" =>"2024-12-01","title"=>"オフライン説明会開催の案内","category_id"=>2],
            ["date" =>"2024-06-01","title"=>"WEB説明会について","category_id"=>2]
        ];

        $save_initial_value =Event::insert($initial_value);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};

