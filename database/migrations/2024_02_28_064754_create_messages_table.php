<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Message;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("role")->nullable();
            $table->string("title");
            $table->longText("msg");
            $table->string("path");
            $table->timestamps();
        });

        $initial_value =[
            ["name"=>"菊川 厚","role"=>"代表取締役","title"=>"KIKUKAWAであなたの力を存分に発揮してください","msg"=>"弊社、キクカワエンタープライズは常に変化する時代のニーズに応じた製品づくりを行ってきました。創業時より培った自社の技術を磨いていく精神は、ＩＣＴ・ＡＩなどの最新技術の時代においても、ものづくりの根幹をなす部分として受け継がれています。 そのなかで大切にしているのは、社員の皆さんの成長です。2022年は研究棟も新設しました。新入社員の方々には、経験豊富な先輩社員がサポートし、スキルを磨きながら成長できる環境を提供し、研修制度も充実させています。 私たちの目標は会社の発展とともに、社員の皆さんも仕事を通じて成長できること。社員一同、皆さんとの出会いを楽しみにしています。","path"=>"storage/img/messagePic01.jpg"],
            ["name"=>"採用窓口","role"=>"","title"=>"KIKUKAWAはあなたの力を求めています！","msg"=>"当社の製品は、日本だけではなく世界中で利用されており、社員一人ひとりが、そのことに誇りを持って仕事をしています。 また、当社では全社方針として「Smile&Happiness」を掲げ、お客様に満足いただけるものづくりと働く人の幸せにより、会社も発展していくと考えています。会社を支えるのは人です。 当社では働く環境の改善や人材育成にも力を入れていきたいと思っています。 ものづくりに興味がある方、人と話をするのが好きな方、ぜひエントリーしてください。皆様のご応募を心よりお待ちしております！","path"=>"storage/img/messagePic02.png"]
        ];

        $save_initial_value =Message::insert($initial_value);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');


    }
};
