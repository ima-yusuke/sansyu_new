<article class="rounded-15 bg-white shadow-border p-10 flex flex-col gap-6 md:w-[48%] w-[90%]">
    {{--タイトル箇所--}}
    <div class="flex items-start gap-6 self-stretch">
        <div class="w-30 h-30 md:w-36 md:h-36 shrink-0 rounded-8 md:rounded-10 bg-headLinerEnd"></div>
        <div class="flex flex-col justify-center items-start gap-2 h-30 md:h-36">
            <p class="md:text-xl font-bold leading-7">{{$value["title"]}}</p>
        </div>
    </div>
    {{--詳細箇所--}}
    <div class="flexColumn gap-12">
        @foreach($value->benefit as $key=>$val)
            <div class="flexColumn gap-3">
                @if($val["benefit_title"]!=null)
                    <h4 class="font-bold text-sm lg:text-base">{{$val["benefit_title"]}}</h4>
                @endif
                <aside>
                    @if($val["benefit_content"]!=null)
                        <p class="text-sm lg:text-base whitespace-pre-line">{{$val["benefit_content"]}}</p>
                    @endif
                </aside>
            </div>
        @endforeach
    </div>
</article>
