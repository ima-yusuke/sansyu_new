<x-dashboard>
    <h1>User page</h1>
    @foreach($infos as $value)
        {{--event ok--}}
{{--        <p>{{$value->events["category_name"]}}</p>--}}
{{--        <p>{{$value["title"]}}</p>--}}

            {{--{{category}}--}}
                <p>{{$value["category_name"]}}</p>
                <p>{{$value->category["title"]}}</p>
        <br>
        <hr>
    @endforeach
</x-dashboard>
