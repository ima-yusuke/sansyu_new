<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\BenefitContent;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('benefit_contents', function (Blueprint $table) {
            $table->id();
            $table->integer("benefit_id");
            $table->string("benefit_title")->nullable();
            $table->longText("benefit_content");
            $table->timestamps();
        });

        $initial_value =[
            ["benefit_id"=>"1","benefit_title"=>"【正社員】営業職（国内）",
                "benefit_content"=>"高専 卒業見込みの方
                月給：256,812円（一律手当含む）
                大学 卒業見込みの方
                月給：279,348円（一律手当含む）
                大学院 卒業見込みの方
                月給：287,902円（一律手当含む)"
            ],
            ["benefit_id"=>"1","benefit_title"=>"【正社員】営業職以外",
                "benefit_content"=>"高専 卒業見込みの方
                月給：183,912円
                大学 卒業見込みの方
                月給：206,448円
                大学院 卒業見込みの方
                月給：215,002円"
            ],
            ["benefit_id"=>"2","benefit_title"=>"【正社員】営業職（国内）",
                "benefit_content"=>"通勤手当：1,000円～50,000円
                扶養手当：7,000円以上
                一律勤務地手当：40,000円～50,000円（固定給に含む）
                一律営業職手当：32,900円（固定給に含む）
                営業所成果手当
                役付手当
                資格手当 ほか"
            ],
            ["benefit_id"=>"2","benefit_title"=>"【正社員】営業職以外",
                "benefit_content"=>"通勤手当：1,000円～50,000円
                扶養手当：7,000円以上
                役付手当
                資格手当 ほか"
            ],
            ["benefit_id"=>"2","benefit_title"=>"備考：〔一律勤務地手当〕",
                "benefit_content"=>"東京 ： 50,000円
                名古屋・大阪・福岡 ： 40,000円"
            ],
            ["benefit_id"=>"3","benefit_title"=>"昇給",
                "benefit_content"=>"年1回"
            ],
            ["benefit_id"=>"3","benefit_title"=>"賞与",
                "benefit_content"=>"年2回 備考：業績によっては決算賞与あり"
            ],
            ["benefit_id"=>"4","benefit_title"=>"",
                "benefit_content"=>"完全週休2日制
                （基本は土曜・日曜・祝日、ほか会社指定日）
                ※年１回土曜出勤あり、祝日の出勤日あり
                ＧＷ休暇、夏季休暇、年末年始休暇など"
            ],
            ["benefit_id"=>"4","benefit_title"=>"休暇制度",
                "benefit_content"=>"年次有給休暇※、慶弔休暇、産前産後休暇、育児休業、介護休暇、子の看護休暇、出生時育児休業（産後パパ育休）
                 ※入社2ヶ月後…6日、入社半年後...4日"
            ],
            ["benefit_id"=>"5","benefit_title"=>"",
                "benefit_content"=>"社会保険完備（健康保険、厚生年金、雇用保険、労災保険）
                退職時株式給付制度（J-ESOP）
                慶弔見舞金
                昼食費補助
                予防接種費用補助"
            ],
            ["benefit_id"=>"6","benefit_title"=>"",
                "benefit_content"=>"2ヶ月 ※労働条件の変更なし"
            ],
            ["benefit_id"=>"7","benefit_title"=>"",
                "benefit_content"=>"労働組合
                （JAMキクカワエンタープライズ労働組合）
                ※労働組合も各種レクリエーションを企画・実施しています。"
            ],
        ];

        $save_initial_value =BenefitContent::insert($initial_value);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('benefit_contents');
    }
};
