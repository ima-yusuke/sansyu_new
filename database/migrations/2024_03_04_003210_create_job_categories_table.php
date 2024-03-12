<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\JobCategory;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('job_categories', function (Blueprint $table) {
            $table->id();
            $table->integer("job_opening_id");
            $table->string("job_title")->nullable();
            $table->longText("job_content")->nullable();
            $table->timestamps();
        });

        $initial_value =[
            ["job_opening_id"=>1,"job_title"=>"機械設計","job_content"=>"顧客との打ち合わせ／工作機械・プラント等の３ＤＣＡＤを用いた設計・製図／新たな加工方法や機構などの研究・開発"],
            ["job_opening_id"=>1,"job_title"=>"電気設計","job_content"=>"製品を作る上での機能における部品選定／ＣＡＤを用いた電気制御回路の設計・製図／カメラ画像や無線技術を用いた検査・製造技術開発"],
            ["job_opening_id"=>1,"job_title"=>"制御ソフトウェア開発","job_content"=>"様々な素材を加工する機械のソフトウェア開発"],
            ["job_opening_id"=>2,"job_title"=>"営業職（国内営業）","job_content"=>"主として既存顧客の営業・顧客との打ち合わせ・展示会での営業 ※勤務地は本社以外（東京・大阪・名古屋・福岡）のいずれかとなります。"],
            ["job_opening_id"=>3,"job_title"=>"","job_content"=>"資材等の発注／納期・仕入・伝票の管理／購買データ管理／ 棚卸管理／集計業務ほか"],
            ["job_opening_id"=>4,"job_title"=>"機械オペレーター","job_content"=>"金属部品の機械加工"],
            ["job_opening_id"=>4,"job_title"=>"機械組立・サービスエンジニア","job_content"=>"工作機械等の組み立て／機械の据え付け／アフターサービスほか"],
        ];

        $save_initial_value =JobCategory::insert($initial_value);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_categories');
    }
};
