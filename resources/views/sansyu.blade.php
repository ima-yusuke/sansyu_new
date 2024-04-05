<x-layout title="株式会社三秀">
    <x-header></x-header>

    <main class="bg-top_bg flex flex-col gap-6 items-center h-full">

        {{--ヘッダービジュアル--}}
        <section id="home" class="relative z-10 w-full">
            <div class="bg-top_bg absolute bottom-6 left-4 object-cover">
                <h1 class="text-9xl font-bold  text-baseColor">モノづくりの難しさと楽しさ</h1>
                <h1 class="text-9xl font-bold text-baseColor">職人の技と最新の設備</h1>
                <h1 class="text-9xl font-bold text-baseColor">その先に産まれるヨロコビ</h1>
            </div>
            <img src="{{asset("img/top_bg.png")}}" class="w-full h-auto" alt="image">
        </section>

        {{--会社紹介--}}
        <section id="about" class="relative w-full h-auto">
            <article class="absolute top-36 left-32 flex flex-col gap-16">
                <div class="text-white flex flex-col gap-24">
                    <aside>
                        <h2 class="text-6xl font-bold">About</h2>
                        <p>会社紹介</p>
                    </aside>
                    <div class="flex flex-col gap-8">
                        <aside class="flex flex-col gap-4">
                            <h2 class="text-6xl font-bold">金属製品の試作はお任せください。</h2>
                            <h2 class="text-6xl font-bold">なんでも作れます！短納期・小ロットで形にします。</h2>
                        </aside>
                        <aside class="flex flex-col gap-4 w-[50%] text-2xl font-medium">
                            <p>
                                三秀精機製造 株式会社は、自動車部品の量産を行っていた株式会社三秀より独立し、試作部品を製造する会社として1967年に創業。
                            </p>
                            <p>
                                50年以上の歴史から、精度の高い品物を短納期で製作するためのノウハウを培ってきました。 現在ではトラックやバス、航空機の排水溝、鉄道のパンタグラフなど、 様々な分野の製品を手掛けております。
                            </p>
                        </aside>
                    </div>
                </div>

                <div class="flex items-center gap-4 ml-auto mr-36 mt-16">
                    <p class="text-white text-xl">View more</p>
                    <div class="bg-white rounded-277 w-24 h-24 text-4xl"><a class="flex rounded-277 items-center justify-center w-full h-full hover:bg-baseColor hover:text-white">→</a></div>
                </div>
            </article>

            <div class="w-full h-auto bg-top2_bg">
                <img src="{{asset("img/about_bg.jpg")}}" class="w-full h-auto" alt="image">
            </div>
        </section>


        {{--メッセージ--}}
        <section id="messages" class="commonSectionStyles md:items-start lg:items-center relative overflow-hidden [&>*:not(:first-child)]:mx-4">

            {{--背景ボール--}}
            <div class="opacity-40 rounded-1019 shadow-headBall h-1000 w-1000 absolute right-650 bottom-470 bg-gradient-to-r from-headLinerEnd from-21.73% to-headLinerStart to-77.55%"></div>

            <div id="test" class="flexColumn items-start gap-8 lg:w-9/12">
                {{--タイトル--}}
                <x-title>メッセージ</x-title>


                    @foreach($messages as $key=>$value)
                        {{--1名のメッセージ--}}
                        <article class="flexColumn md:flex-row items-center gap-12">
                            <aside class="w-full md:w-auto">
                                <div class="w-full md:w-270 md:h-330 flex justify-start items-start relative">
                                    <img src="{{asset($value['path'])}}"
                                         class="rounded-8 w-full h-full object-cover" alt="image">
                                    <img src="{{asset("img/messageBg.jpg")}}"
                                         class="bottom-5 left-0 right-0 m-auto m-0 absolute rounded-8" alt="image">
                                    <aside
                                        class="flexColumn items-center gap-px absolute left-0 right-0 m-0 m-auto bottom-12">
                                        @if($value["role"]!=null)
                                            <p class="text-profile text-center text-xs capitalize">{{$value["role"]}}</p>
                                        @endif
                                        <p class="leading-6 text-center text-profileName capitalize">{{$value["name"]}}</p>
                                    </aside>
                                </div>
                            </aside>
                            <aside class="flexColumn items-start gap-4">
                                <div class="leading-7 capitalize flex flex-col gap-y-8 w-full">
                                   <p class="whitespace-pre-wrap">{{$value["msg"]}}</p>
                                </div>
                            </aside>
                        </article>
                    @endforeach
                </div>
        </section>

        {{--社員インタビュー--}}
        <section id="interviews" class="commonSectionStyles bg-headLinerEnd">
            {{--タイトル--}}
            <div class="mx-4 flex justify-center items-start py-2 px-9 gap-2.5 rounded-4 border-l-8 border-solid border-baseColor bg-white">
                <p class="text-2xl font-semibold text-baseColor leading-6">社員インタビュー</p>
            </div>

            {{--コンテンツ--}}
            <livewire:modal :interviews="$interviews"></livewire:modal>
        </section>

        {{--募集職種・募集要項--}}
        <section id="jobs" class="commonSectionStyles mx-4 w-full 2xl:w-[85%]">
            {{--タイトル--}}
            <x-title>募集職種・募集要項</x-title>

            <div class="flexColumnCenter md:flex-row md:flex-wrap md:items-start lg:justify-between gap-y-14 md:w-[90%]">
                {{--各部門--}}
                @foreach($job_recruits as $value)
                    <article class="flexColumn items-start gap-2.5 relative  w-11/12 lg:w-[47%] rounded-8 bg-white shadow-depart overflow-hidden">
                        {{--背景ボール--}}
                        <div>
                            <div class="absolute -top-8 lg:-top-12 -left-12 md:-left-8 w-275 h-277 rounded-277 bg-gradient-to-r from-departStart from-0% to-departEnd to-100%"></div>
                            {{--                            <div class="absolute lg:-top-10 -top-5 right-200 md:right-600 lg:right-410 w-275 h-277 rounded-277 bg-gradient-to-r from-departStart from-0% to-departEnd to-100%"></div>--}}
                        </div>
                        {{--部門詳細テキスト--}}
                        <div class="flexColumn items-start gap-4 p-6 z-30">
                            <p class="text-profileName text-2xl font-bold opacity-90">{{$value["title"]}}</p>
                            <aside class="flex flex-col items-start gap-9">
                                <div>
                                    @foreach($value->job_opening as $key=>$val)
                                        <aside class="md:text-base text-sm">
                                            @if($val["job_title"]!=null)
                                                <p>■{{$val["job_title"]}}</p>
                                            @endif

                                            @if($val["job_content"]!=null)
                                                <p>{{$val["job_content"]}}</p>
                                            @endif
                                        </aside>
                                    @endforeach
                                </div>

                                {{--募集人数などあれば表示、なければスキップ--}}
                                <div class="flexColumn items-start gap-4 self-stretch">
                                    @if($value["job_target"]!=null)
                                        <aside class="flexColumn items-start gap-2 self-stretch">
                                            <div
                                                class="flex items-start gap-2.5 py-0.5 px-2 rounded-4 bg-titleBlack">
                                                <p class="text-white font-bold text-xs">募集対象</p>
                                            </div>
                                            <p class="md:text-base text-sm">{{$value["job_target"]}}</p>
                                        </aside>
                                     @endif
                                    @if($value["recruit_number"]!=null)
                                        <aside class="flexColumn items-start gap-2 self-stretch">
                                            <div
                                                class="flex items-start gap-2.5 py-0.5 px-2 rounded-4 bg-titleBlack">
                                                <p class="text-white font-bold text-xs">募集人数</p>
                                            </div>
                                            <p class="md:text-base text-sm">{{$value["recruit_number"]}}</p>
                                        </aside>
                                    @endif
                                    @if($value["ideal_emp"]!=null)
                                        <aside class="flexColumn items-start gap-2 self-stretch">
                                            <div
                                                class="flex items-start gap-2.5 py-0.5 px-2 rounded-4 bg-titleBlack">
                                                <p class="text-white font-bold text-xs">希望する人材像</p>
                                            </div>
                                            <p class="md:text-base text-sm">{{$value["ideal_emp"]}}</p>
                                        </aside>
                                    @endif
                                </div>
                            </aside>
                        </div>
                    </article>
                @endforeach
            </div>
        </section>

        {{--待遇・福利厚生--}}
        <section class="commonSectionStyles mx-4 w-full 2xl:w-[85%]">
            {{--タイトル--}}
            <x-title>待遇・福利厚生</x-title>
            {{--コンテンツ--}}
            <div class="flex flex-col items-center gap-8 md:w-[90%]">
                <?php $counter =0; ?>
                <div class="flexColumnCenter md:flex-row md:items-start md:justify-between flex-wrap gap-y-8">
                    @foreach($benefits as $key=>$value)
                        <x-benefit :value="$value"></x-benefit>
                    @endforeach
                </div>
            </div>
        </section>

        {{--採用フロー--}}
        <section class="commonSectionStyles mx-4 w-[90%] lg:w-full 2xl:w-[85%]">
            {{--タイトル--}}
            <x-title>採用フロー</x-title>
            {{--コンテンツ--}}
            <div class="flexColumnCenter md:flex-row md:items-start gap-16 lg:w-[90%]">

                {{--フロー--}}
                <div class="flexColumn items-start gap-12 shadow-border py-16 px-6 md:px-12 md:w-[50%] rounded-4 bg-white">
                    {{--フロー図--}}
                    <aside class="flexColumn justify-center items-start gap-2 self-stretch">
                        @foreach($recruit_flow as $value)
                            <div class="flex items-start gap-6 self-stretch">
                                <div class="flexColumn items-center gap-4">
                                    <div class="flexCenter w-30 h-30 md:w-36 md:h-36 shrink-0 rounded-30 bg-headLinerEnd">
                                        <p class="text-white text-base lg:text-xl font-semibold leading-6 shrink-0">{{$value["num"]}}</p>
                                    </div>
                                    @if($value["num"]!=3)
                                        <div class="h-30 w-0.5 bg-headLinerEnd"></div>
                                    @endif
                                </div>

                                <p class="flex justify-start items-center h-30 md:h-36 text-base lg:text-xl">{{$value["title"]}}</p>
                            </div>
                        @endforeach
                    </aside>
                </div>

                {{--提出書類--}}
                <div class="flexColumnCenter gap-6 p-9 shadow-border w-full md:w-[50%] rounded-8 bg-white">
                    <p class="font-bold">提出書類</p>
                    <aside class="flexColumn items-start gap-4">
                        @foreach($recruit_documents as $value)
                            <div class="flex items-center gap-2.5">
                                <img src="{{asset("img/kikukawaPic11.jpg")}}" class="w-20 h-20" alt="image">
                                <p class="font-medium">{{$value}}</p>
                            </div>
                        @endforeach
                    </aside>
                </div>
            </div>
        </section>

        {{--よくある質問--}}
        <section class="commonSectionStyles overflow-hidden relative w-full 2xl:w-[85%]">
            {{--スクエア背景--}}
            <div class="w-1820 h-507 opacity-50 absolute top-0 rotate-45 bg-gradient-to-r from-square from-7.08% to-headLinerEnd to-98.07% shrink-0"></div>
            {{--タイトル--}}
            <x-title>よくある質問</x-title>
            {{--コンテンツ--}}
            <div class="w-full lg:w-[90%] mx-4 flexColumnCenter flex-wrap md:flex-row lg:justify-between md:items-start gap-4 z-50 overflow-hidden ">
                @foreach($questions as $idx=>$values)
                    {{--各質問--}}
                    <div class="qa__item z-50 py-6 px-2 flexColumn justify-center gap-6 bg-white shadow-question border border-solid border-questionBorder rounded-15 w-[90%] md:w-[80%] lg:w-[47%] shrink-0">
                        {{--質問--}}
                        <div class="questionTitle qa__head js-ac flex items-center gap-4 ml-4">
                            <div class="flexCenter w-30 h-30 md:h-42 md:w-42 rounded-10 bg-questionIcon">
                                <i class="fa-solid fa-chevron-down questionIcon"></i>
                            </div>
                            <p class="text-xs md:text-base lg:text-lg font-bold leading-6 opacity-90">{{$values["question"]}}</p>
                        </div>
                        {{--回答（最初非表示）--}}
                        <div class="qa__body">
                            <p>{{$values["answer"]}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        {{--フッター--}}
       <x-footer></x-footer>
    </main>
</x-layout>

