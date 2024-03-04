<x-dash-layout>
    <div class="flexColumn items-center gap-16 py-10">
        {{--現在の一覧表示--}}
        <section class="w-[90%] flexColumn gap-8 sm:rounded-lg">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">【 メッセージ一覧 】</h2>
            <table class="shadow-md w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr class="text-center">
                    <th scope="col" class="px-6 py-3">
                        役職
                    </th>
                    <th scope="col" class="px-6 py-3">
                        氏名
                    </th>
                    <th scope="col" class="px-6 py-3">
                        プロフィール画像
                    </th>
                    <th scope="col" class="px-6 py-3">
                        タイトル
                    </th>
                    <th scope="col" class="px-6 py-3">
                        メッセージ
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
                @foreach($messages as $key=>$value)
                    {{--最初表示されるtr--}}
                    <tr class="originalTr bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4 w-150 text-center">{{$value["role"]!=null?$value["role"]:"-"}}</td>
                        <td class="px-6 py-4 w-150">{{$value["name"]}} </td>
                        <td class="px-6 py-4 w-180">
                            <img src="{{asset($value->path)}}" class="w-full rounded-8 shrink-0 object-cover">
                        </td>
                        <td class="px-6 py-4 w-1/6">{{$value["title"]}} </td>
                        <td class="px-6 py-4 w-[40%]">{{$value["msg"]}} </td>
                        <td class="px-6 py-4 w-42">
                            <a href="#" class="editBtn font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                        <livewire:message-livewire :id="$value->id"></livewire:message-livewire>
                    </tr>

                    {{--hidden (編集用tr)--}}
                    <tr class="editTr text-center bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <form method="post" action="{{route('update-message',$value)}}" enctype="multipart/form-data">
                            @csrf
                            @method("patch")
                            <td class="px-2 py-4 w-100"><input type="text" name="role" value="{{$value["role"]!=null?$value["role"]:null}}" class="text-xs"></td>
                            <td class="px-2 py-4 w-100"><input type="text" name="name" value="{{$value["name"]}}" class="text-xs"> </td>
                            <td class="px-2 py-4 w-150"><input type="file" name="image" class="w-150 text-xs"></td>
                            <td class="px-2 py-4 w-150"><input type="text" name="title" value="{{$value["title"]}}" class="text-xs"></td>
                            <td class="px-2 py-8 w-full"><textarea  name="msg" class="w-full h-200 text-xs">{{$value["msg"]}}</textarea></td>
                            <td class="px-2 py-4">
                                <button class="font-medium text-blue-600 dark:text-blue-500 hover:underline">save</button>
                                <a href="#" class="closeBtn font-medium text-blue-600 dark:text-blue-500 hover:underline">✗</a>
                            </td>
                        </form>
                        <livewire:message-livewire :id="$value->id"></livewire:message-livewire>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </section>

        {{--Add product--}}
        <section class="w-[90%] flexColumn gap-8">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">【 メッセージの追加 】</h2>
            <form class="Form flexColumn gap-8" method="post" action="{{route("add-message")}}" enctype="multipart/form-data">
                @csrf
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">＊お名前</label>
                        <input type="text" name="name" id="p_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="山田　太郎" required />
                    </div>
                    <div>
                        <label for="role" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">役職</label>
                        <input type="text" name="role" id="role" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="代表取締役" />
                    </div>
                    <div>
                        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">＊タイトル</label>
                        <input type="text" name="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="タイトル" required />
                    </div>
                    <div>
                        <label for="msg" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">＊メッセージ</label>
                        <textarea name="msg" id="msg" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="メッセージ" required ></textarea>
                    </div>
                    <div>
                        <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">＊プロフィール画像</label>
                        <input type="file" name="image" id="image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
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
