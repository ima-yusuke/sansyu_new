<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Question;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string("question");
            $table->longText("answer");
            $table->timestamps();
        });

        $initial_value =[
            ["question"=>"新入社員研修について教えて下さい","answer"=>"最初の1週間～10日間は、一社会人として、基本的なビジネスマナーや会社について理解を深めるための研修を行います。 その後は職種別に数ヶ月間研修を行います。 例えば、開発設計職や製造部門の方は当社製品を覚えていただくために、製造工程や加工、配線、道具の使い方などを丁寧に学んでいきます。開発設計職は概ね１〜２年後に配属となりますが、その後も先輩について、学びながら仕事をしていただきます。"],
            ["question"=>"勤務地は本社と工場のある伊勢市以外にもありますか？","answer"=>"本社・工場（伊勢市朝熊町）および営業については、東京・大阪・名古屋・福岡にも拠点があります。各拠点はホームページからもご覧いただけます。"],
            ["question"=>"自己研鑽に関する支援制度はありますか","answer"=>"業務に関する資格については、取得費用を全額負担しています。"],
            ["question"=>"勤務時間の規定を教えてください","answer"=>"本社 は8:10～16:45、営業所勤務の場合は8:40～17:30（いずれも一日あたり7時間50分）となっています。"],
        ];

        $save_initial_value =Question::insert($initial_value);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
