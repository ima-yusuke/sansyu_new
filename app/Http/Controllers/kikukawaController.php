<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Event;
use App\Models\Message;
use App\Models\Product;
use App\Models\Question;
use App\Models\Interview;
use Illuminate\Http\Request;

class kikukawaController extends Controller
{
    //
    public function giveInfo (){

        $eventInfos = Event::all();

        $products = Product::all();

        $messages = Message::all();

        $questions = Question::all();

        $interviews = Interview::all();

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


        return view("kikukawa",compact("eventInfos","products","messages","recruit_flow","recruit_documents","job_type","benefits_A","questions","interviews"));
    }

    public function dashboardMain()
    {
        return view("dashboard-main");
    }

    public function dashboardUser()
    {
        return view("dashboard-user");
    }

    //=============[Event]==================

    public function showEvent()
    {
        return view("edit-event");
    }

    //Get data from DB and send it to view
    public function getAllData()
    {
        $eventData = Event::all();
        $categoryData = Category::all();

        return view("edit-event",compact("eventData","categoryData"));
    }


    //Add Event
    public function addEvent(Request $request)
    {

        $post = Event::create([
            "date" => $request->date,
            "title" => $request->title,
            "category" => $request->category,
        ]);

        // 元のページに戻る
        return redirect()->route('show-event');
    }

    //Add Category
    public function addCategory(Request $request)
    {

        $post = Category::create([
            "category_name" => $request->category_name,
        ]);

        return redirect()->route('show-event');
    }

    //Edit
    public function updateEvent(Request $request, Event $event)
    {

        //ここに項目を追加しないと更新されない
        $validated = $request->validate([
            "title"=>"required",
            "date"=>"required",
            "category"=>"required",
        ]);

        $event->update($validated);
        return redirect()->route('show-event');
    }
}

