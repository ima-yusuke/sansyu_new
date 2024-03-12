<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Product;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("p_name");
            $table->string("path");
            $table->timestamps();
        });

        $initial_value =[
            ["p_name"=>"製材・プレカット","path"=>"storage/img/product01.jpg"],
            ["p_name"=>"集成材・CLT","path"=>"storage/img/product02.jpg"],
            ["p_name"=>"合板・ボード","path"=>"storage/img/product03.jpg"],
            ["p_name"=>"工作機械","path"=>"storage/img/product04.jpg"],
            ["p_name"=>"樹脂・基板","path"=>"storage/img/product05.jpg"],
            ["p_name"=>"水分計","path"=>"storage/img/product06.jpg"],
        ];

        $save_initial_value =Product::insert($initial_value);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
