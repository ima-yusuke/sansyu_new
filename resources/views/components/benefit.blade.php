<article class="rounded-15 bg-white shadow-border p-10 flex flex-col gap-6 {{$benefit["box_size"]=="big"?'md:w-2/4':null}} ">
    {{--タイトル箇所--}}
    <div class="flex items-start gap-6 self-stretch">
        <div class="w-30 h-30 md:w-36 md:h-36 shrink-0 rounded-8 md:rounded-10 bg-headLinerEnd"></div>
        <div class="flex flex-col justify-center items-start gap-2 h-30 md:h-36">
            <p class="md:text-xl font-bold leading-7">{{$benefit["title"]}}</p>
        </div>
    </div>
    {{--詳細箇所--}}
    <div class="flexColumn {{$benefit["flag"]=="true"?'md:flex-row':'flex-col'}} gap-6">
        {{--subtitleが2つまでと3つまでがあるのでcountで対応している--}}
        @for($i=1;$i<=count($benefit)-4;$i++)
           @foreach($benefit["subtitle".$i] as $key=>$values)
                <div class="flex flex-col gap-3 {{$benefit["flag"]=="true"?'w-full md:w-5/12':null}}">
                    @if($key!="null")
                        <h4 class="font-bold text-sm lg:text-base">{{$key}}</h4>
                    @endif
                    <aside>
                        @foreach($values as $value)
                            <p class="text-sm lg:text-base">{{$value}}</p>
                        @endforeach
                    </aside>
                </div>
           @endforeach
        @endfor
    </div>
</article>
