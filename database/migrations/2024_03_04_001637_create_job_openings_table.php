<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\JobOpening;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('job_openings', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("job_target")->nullable();
            $table->string("recruit_number")->nullable();
            $table->longText("ideal_emp")->nullable();
            $table->timestamps();
        });

        $initial_value =[
            ["title"=>"開発設計部門","job_target"=>"理系大学院生、理系学部生、専門学校生","recruit_number"=>"1～5名","ideal_emp"=>"ものづくりに興味のある方、例えばプラモデル作りが好きな方など、ぜひご応募ください。機械系・情報系の学問を学ばれた方は、特に歓迎いたします。海外のお客様もみえるため、英語力に自信がある方なども歓迎いたします。現在学ばれていることを当社で仕事に生かしませんか？"],
            ["title"=>"営業部門","job_target"=>"理系大学院生、理系学部生、文系大学院生、文系学部生、専門学校生","recruit_number"=>"1～2名","ideal_emp"=>"人と話をするのが好きな方など、特に歓迎いたします。現在学ばれていることを当社で仕事に生かしませんか？"],
            ["title"=>"資材調達部門","job_target"=>"","recruit_number"=>"","ideal_emp"=>""],
            ["title"=>"製造部門","job_target"=>"","recruit_number"=>"","ideal_emp"=>""],
        ];

        $save_initial_value =JobOpening::insert($initial_value);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_openings');
    }
};
