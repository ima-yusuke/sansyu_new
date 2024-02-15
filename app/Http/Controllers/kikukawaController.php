<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\Request;

class kikukawaController extends Controller
{
    //
    public function giveInfo (){
        $internship =[
            ["id"=>1,"date"=>"2024.12.15","title"=>"1day仕事体験実施中!","category"=>1,"categoryName"=>"インターンシップ情報"],
            ["id"=>2,"date"=>"2024.12.1","title"=>"オンライン説明会開催の案内","category"=>2,"categoryName"=>"説明会情報"],
            ["id"=>3,"date"=>"2024.6.1","title"=>"WEB説明会について","category"=>2,"categoryName"=>"説明会情報"],
        ];


        $products =[
            ["id"=>1,"name"=>"製材・プレカット","image"=>"product01.jpg"],
            ["id"=>2,"name"=>"集成材・CLT","image"=>"product02.jpg"],
            ["id"=>3,"name"=>"合板・ボード","image"=>"product03.jpg"],
            ["id"=>4,"name"=>"工作機械","image"=>"product04.jpg"],
            ["id"=>5,"name"=>"樹脂・基板","image"=>"product05.jpg"],
            ["id"=>6,"name"=>"水分計","image"=>"product06.jpg"]
        ];

        $messages =[
            ["id"=>1,"name"=>"菊川 厚","title"=>"KIKUKAWAであなたの力を存分に発揮してください","image"=>"messagePic01.jpg",
                "msg"=>["弊社、キクカワエンタープライズは常に変化する時代のニーズに応じた製品づくりを行ってきました。創業時より培った自社の技術を磨いていく精神は、ＩＣＴ・ＡＩなどの最新技術の時代においても、ものづくりの根幹をなす部分として受け継がれています。
            ","そのなかで大切にしているのは、社員の皆さんの成長です。2022年は研究棟も新設しました。新入社員の方々には、経験豊富な先輩社員がサポートし、スキルを磨きながら成長できる環境を提供し、研修制度も充実させています。","私たちの目標は会社の発展とともに、社員の皆さんも仕事を通じて成長できること。社員一同、皆さんとの出会いを楽しみにしています。"]
            ],
            ["id"=>2,"name"=>"採用窓口","title"=>"KIKUKAWAはあなたの力を求めています！","image"=>"messagePic02.png",
                "msg"=>["当社の製品は、日本だけではなく世界中で利用されており、社員一人ひとりが、そのことに誇りを持って仕事をしています。 また、当社では全社方針として「Smile&Happiness」を掲げ、お客様に満足いただけるものづくりと働く人の幸せにより、会社も発展していくと考えています。会社を支えるのは人です。 当社では働く環境の改善や人材育成にも力を入れていきたいと思っています。",
                    "ものづくりに興味がある方、人と話をするのが好きな方、ぜひエントリーしてください。皆様のご応募を心よりお待ちしております！"]
            ]
        ];

        $employeeInfo =[
            ["id"=>1,"name"=>"T.N","join"=>"2016年入社","school"=>"鳥羽商船高等専門学校","department"=>"電子機械工学科　卒業","job_dpt"=>"開発設計部　電気設計","image"=>"employeePic01.png"],
            ["id"=>2,"name"=>"Y.W","join"=>"2016年入社","school"=>"日本大学 生産工学部","department"=>"数理情報工学科 卒業","job_dpt"=>"開発設計部　電気設計","image"=>"employeePic02.png"],
            ["id"=>3,"name"=>"Y.W","join"=>"2017年入社","school"=>"日本大学 工学部","department"=>"機械工学科 卒業","job_dpt"=>"開発設計部　機械設計","image"=>"employeePic03.png"],
            ["id"=>4,"name"=>"Y.K","join"=>"2018年入社","school"=>"三重大学 工学部","department"=>"電気電子工学科 卒業","job_dpt"=>"開発設計部　機械設計","image"=>"employeePic04.png"],
            ["id"=>5,"name"=>"R.D","join"=>"2023年入社","school"=>"三重大学 生物資源学部","department"=>"共生環境学科 卒業","job_dpt"=>"製造部　開発設計","image"=>"employeePic05.png"],
            ["id"=>6,"name"=>"K.H","join"=>"2023年入社","school"=>"名城大学 理工学部","department"=>"材料機能工学科 卒業","job_dpt"=>"製造部　開発設計","image"=>"employeePic06.png"],
            ["id"=>7,"name"=>"T.N","join"=>"2014年入社","school"=>"法政大学 経営学部","department"=>"経営戦略学科 卒業","job_dpt"=>"営業部","image"=>"employeePic07.jpeg"],
            ["id"=>8,"name"=>"T.K","join"=>"2016年入社","school"=>"名古屋外国語大学 外国語学部","department"=>"英米語学科 卒業","job_dpt"=>"貿易部","image"=>"employeePic08.png"],
        ];

        $job_type =[
            ["id"=>1,"title"=>"開発設計部門",
                "info"=>
                    [
                        "■機械設計"=>"顧客との打ち合わせ／工作機械・プラント等の３ＤＣＡＤを用いた設計・製図／新たな加工方法や機構などの研究・開発",
                        "■電気設計"=>"製品を作る上での機能における部品選定／ＣＡＤを用いた電気制御回路の設計・製図／カメラ画像や無線技術を用いた検査・製造技術開発",
                        "■制御ソフトウェア開発"=>"様々な素材を加工する機械のソフトウェア開発"
                    ],
                "detail"=>
                    [
                        "募集対象"=>"理系大学院生、理系学部生、専門学校生",
                        "募集人数"=>"1～5名",
                        "希望する人材像"=>"ものづくりに興味のある方、例えばプラモデル作りが好きな方など、ぜひご応募ください。機械系・情報系の学問を学ばれた方は、特に歓迎いたします。海外のお客様もみえるため、英語力に自信がある方なども歓迎いたします。現在学ばれていることを当社で仕事に生かしませんか？"
                    ]
            ],
            ["id"=>2,"title"=>"営業部門",
                "info"=>
                    [
                        "■営業職（国内営業)"=>"主として既存顧客の営業・顧客との打ち合わせ・展示会での営業 ※勤務地は本社以外（東京・大阪・名古屋・福岡）のいずれかとなります。",
                    ],
                "detail"=>
                    [
                        "募集対象"=>"理系大学院生、理系学部生、文系大学院生、文系学部生、専門学校生",
                        "募集人数"=>"1～2名",
                        "希望する人材像"=>"人と話をするのが好きな方など、特に歓迎いたします。現在学ばれていることを当社で仕事に生かしませんか？"
                    ]
            ],
            ["id"=>3,"title"=>"資材調達部門",
                "info"=>
                    [
                        "null"=>"資材等の発注／納期・仕入・伝票の管理／購買データ管理／棚卸管理／集計業務ほか",
                    ]
            ],
            ["id"=>4,"title"=>"製造部門",
                "info"=>
                    [
                        "■機械オペレーター"=>"金属部品の機械加工",
                        "■機械組立・サービスエンジニア"=>"工作機械等の組み立て／機械の据え付け／アフターサービスほか"
                    ]
            ]
        ];

        $recruit_flow =[
            ["num"=>1,"title"=>"エントリー"],
            ["num"=>2,"title"=>"説明会(対面・WEB)"],
            ["num"=>3,"title"=>"エントリーシート提出(随時)"],
            ["num"=>4,"title"=>"書類選考"],
            ["num"=>5,"title"=>"筆記試験・役員面接"],
            ["num"=>6,"title"=>"内々定"]
        ];

        $recruit_documents =["履歴書(写真付き)","成績証明書","卒業見込証明書"];

        $benefits_A = [
            ["id"=>1,"title"=>"給与","flag"=>"false","box_size"=>"big",
                "subtitle1"=>
                    ["【正社員】営業職（国内）"=>["高専 卒業見込みの方","月給：256,812円（一律手当含む）","大学 卒業見込みの方","月給：279,348円（一律手当含む）","大学院 卒業見込みの方","月給：287,902円（一律手当含む)"]],
                "subtitle2"=>
                    ["【正社員】営業職以外"=>["高専 卒業見込みの方","月給：183,912円","大学 卒業見込みの方","月給：206,448円","大学院 卒業見込みの方","月給：215,002円"]],
            ],
            ["id"=>2,"title"=>"手当（月額）","flag"=>"false","box_size"=>"big",
                "subtitle1"=>
                    ["【正社員】営業職（国内）"=>["通勤手当：1,000円～50,000円","扶養手当：7,000円以上","一律勤務地手当：40,000円～50,000円（固定給に含む）","一律営業職手当：32,900円（固定給に含む）","営業所成果手当","役付手当","資格手当 ほか"]],
                "subtitle2"=>
                    ["【正社員】営業職以外"=>["通勤手当：1,000円～50,000円","扶養手当：7,000円以上","役付手当","資格手当 ほか"]],
                "subtitle3"=>
                    ["備考：〔一律勤務地手当〕"=>["東京 ： 50,000円","名古屋・大阪・福岡 ： 40,000円"]]
            ],
            ["id"=>3,"title"=>"昇給・賞与","flag"=>"true","box_size"=>"small",
                "subtitle1"=>
                    ["昇給"=>["年1回"]],
                "subtitle2"=>
                    ["賞与"=>["年2回","備考:業績によっては決算賞与あり"]]
            ],
            ["id"=>4,"title"=>"休日・休暇","flag"=>"true","box_size"=>"small",
                "subtitle1"=>
                    ["null"=>["完全週休2日制","(基本は土曜・日曜・祝日、ほか会社指定日）","※年１回土曜出勤あり、祝日の出勤日あり","ＧＷ休暇、夏季休暇、年末年始休暇など"]],
                "subtitle2"=>
                    ["休暇制度"=>["年次有給休暇※、慶弔休暇、産前産後休暇、育児休業、介護休暇、子の看護休暇、出生時育児休業（産後パパ育休）","※入社2ヶ月後…6日、入社半年後...4日"]]
            ],
            ["id"=>5,"title"=>"福利厚生","flag"=>"false","box_size"=>"small",
                "subtitle1"=>
                    ["null"=>["社会保険完備（健康保険、厚生年金、雇用保険、労災保険）","退職時株式給付制度（J-ESOP）","慶弔見舞金","昼食費補助","予防接種費用補助"]],
            ],
            ["id"=>6,"title"=>"試用期間","flag"=>"false","box_size"=>"small",
                "subtitle1"=>
                    ["null"=>["2ヶ月 ※労働条件の変更なし"]]
            ],
            ["id"=>7,"title"=>"その他","flag"=>"false","box_size"=>"small",
                "subtitle1"=>
                    ["null"=>["労働組合","（JAMキクカワエンタープライズ労働組合）","※労働組合も各種レクリエーションを企画・実施しています。"]]
            ]
        ];

        $questions =[
            ["id"=>1,"title"=>"新入社員研修について教えてください","text"=>"最初の1週間～10日間は、一社会人として、基本的なビジネスマナーや会社について理解を深めるための研修を行います。 その後は職種別に数ヶ月間研修を行います。 例えば、開発設計職や製造部門の方は当社製品を覚えていただくために、製造工程や加工、配線、道具の使い方などを丁寧に学んでいきます。開発設計職は概ね１〜２年後に配属となりますが、その後も先輩について、学びながら仕事をしていただきます。"],
            ["id"=>2,"title"=>"勤務地は本社と工場のある伊勢市以外にもありますか？","text"=>"本社・工場（伊勢市朝熊町）および営業については、東京・大阪・名古屋・福岡にも拠点があります。各拠点はホームページからもご覧いただけます。"],
            ["id"=>3,"title"=>"自己研鑽に関する支援制度はありますか","text"=>"業務に関する資格については、取得費用を全額負担しています。"],
            ["id"=>4,"title"=>"勤務時間の規定を教えてください","text"=>"本社 は8:10～16:45、営業所勤務の場合は8:40～17:30（いずれも一日あたり7時間50分）となっています。"],

        ];

        return view("kikukawa",compact("employeeInfo","internship","products","messages","recruit_flow","recruit_documents","job_type","benefits_A","questions"));
    }

    public function dashboardMain()
    {
        return view("dashboard-main");
    }

    public function dashboardUser()
    {
        return view("dashboard-user");
    }

    public function addEvent(Request $request)
    {

        $post = Event::create([
            "date" => $request->date,
            "title" => $request->title,
            "category" => $request->category,
        ]);

//        元のページに戻る
        return redirect()->route('dashboardMain');
    }

    public function addCategory(Request $request)
    {

        $post = Category::create([
            "category_name" => $request->category_name,
        ]);

//        元のページに戻る
        return redirect()->route('dashboardMain');
    }

    public function test()
    {
        $infos = Category::all();

        return view("dashboard-user",compact("infos"));
    }
}

