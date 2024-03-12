<x-dash-layout>
    <div class="flexColumn items-center gap-16 py-10">
        {{--現在の一覧表示--}}
        <section class="w-[90%] flexColumn gap-8 sm:rounded-lg">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">【 イベント一覧 】</h2>
            <table class="shadow-md w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr class="text-center">
                    <th scope="col" class="px-6 py-3">
                        イベント名
                    </th>
                    <th scope="col" class="px-6 py-3">
                        イベント開催日
                    </th>
                    <th scope="col" class="px-6 py-3">
                        カテゴリー
                    </th>
                    <th scope="col" class="px-6 py-3">
                        編集
                    </th>
                    <th scope="col" class="px-6 py-3">
                        削除
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $key=>$value)
                    {{--最初表示されるtr--}}
                    @foreach($value->category as $idx=>$val)
                        <tr class="text-center originalTr bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4">{{$val["title"]}} </td>
                            <td class="px-6 py-4">{{$val["date"]}} </td>
                            <td class="px-6 py-4">{{$value["category_name"]}} </td>
                            <td class="px-6 py-4">
                                <a href="#" class="editBtn font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </td>
                            <livewire:event-livewire :id="$val['id']"></livewire:event-livewire>
                        </tr>


                        {{--hidden (編集用tr)--}}
                        <tr class="text-center editTr bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <form method="post" action="{{route('updateEvent',$val)}}">
                                @csrf
                                @method("patch")
                                <td class="px-6 py-4"><input type="text" name="title" value="{{$val["title"]}}"> </td>
                                <td class="px-6 py-4"><input type="date" name="date" value="{{$val["date"]}}"></td>
                                <td class="px-6 py-4">
                                    <select name="category_name">
                                        @foreach($categories as $category_value)
                                            <option value="{{$category_value["id"]}}" @if($val["category_id"]== $category_value["id"]) selected @endif>{{$category_value["category_name"]}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="px-6 py-4 gap-6">
                                    <button class="font-medium text-blue-600 dark:text-blue-500 hover:underline">save</button>
                                    <a href="#" class="closeBtn font-medium text-blue-600 dark:text-blue-500 hover:underline">✗</a>
                                </td>
                            </form>
                            <livewire:event-livewire :id="$val['id']"></livewire:event-livewire>
                        </tr>
                    @endforeach
                @endforeach
                </tbody>
            </table>
        </section>

        {{--ADD Category--}}
        <section class="w-[90%] flexColumn gap-8">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">【 カテゴリーの追加 】</h2>
            <form class="Form flexColumn gap-8" method="post" action="{{route("add-category")}}">
                @csrf
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="category_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">新規カテゴリー</label>
                        <input type="text" id="category_name" name="category_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="新規カテゴリー" required />
                    </div>
                </div>
                <div class="flex justify-center">
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-3 text-center">登録</button>
                </div>
            </form>
        </section>

        {{--ADD Event--}}
        <section class="w-[90%] flexColumn gap-8">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">【 イベントの追加 】</h2>
            <form class="Form flexColumn gap-8" method="post" action="{{route("add-event")}}">
                @csrf
                <input type="hidden" name="id" value="{{$value["id"]}}">
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">＊イベント名</label>
                        <input type="text" id="title" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="タイトル" required />
                    </div>
                    <div>
                        <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">＊イベント開催日</label>
                        <input type="date" name="date" id="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                    </div>
                    <div>
                        <label for="category_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">＊イベントカテゴリー</label>
                        <select name="category_id" id="category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @foreach($categories as $val)
                                <option value="{{$val["id"]}}">{{$val["category_name"]}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="flex justify-center">
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-3 text-center">登録</button>
                </div>
            </form>
        </section>
    </div>
</x-dash-layout>


<script>
    // テーブルinput表示・非表示切り替え(eventFlagにはdiplay:node)

    let editTr = document.getElementsByClassName("editTr");
    let originalTr = document.getElementsByClassName("originalTr");
    let editBtn = document.getElementsByClassName("editBtn");
    let closeBtn = document.getElementsByClassName("closeBtn");

    for(let i = 0;i<editTr.length;i++){
        editTr[i].classList.add("eventFlag");

        editBtn[i].addEventListener("click",function (){
            editTr[i].classList.remove("eventFlag");
            originalTr[i].classList.add("eventFlag");
        })

        closeBtn[i].addEventListener("click",function (){
            originalTr[i].classList.remove("eventFlag");
            editTr[i].classList.add("eventFlag");
        })
    }

</script>




