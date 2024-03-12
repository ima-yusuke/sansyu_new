<x-dash-layout>
    <div class="flexColumn items-center gap-16 py-10">
        {{--現在の一覧表示--}}
        <section class="w-[90%] flexColumn gap-8 sm:rounded-lg">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">【 製品一覧 】</h2>
            <table class="shadow-md w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr class="text-center">
                    <th scope="col" class="px-6 py-3">
                        商品名
                    </th>
                    <th scope="col" class="px-6 py-3">
                        商品画像
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
                @foreach($products as $key=>$value)
                    {{--最初表示されるtr--}}
                    <tr class="text-center originalTr bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4 w-180">{{$value["p_name"]}} </td>
                        <td class="px-6 py-4 flexCenter">
                            <img src="{{asset($value->path)}}" class="w-4/12 rounded-8 shrink-0 object-cover">
                        </td>
                        <td class="px-6 py-4">
                            <a href="#" class="editBtn font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                        <livewire:product-livewire :id="$value->id"></livewire:product-livewire>
                    </tr>

                    {{--hidden (編集用tr)--}}
                    <tr class="editTr text-center bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <form method="post" action="{{route('update-product',$value)}}" enctype="multipart/form-data">
                            @csrf
                            @method("patch")
                            <td class="px-6 py-4"><input type="text" name="p_name" value="{{$value["p_name"]}}"> </td>
                            <td class="px-6 py-4"><input type="file" name="image"></td>
                            <td class="px-6 py-4 flexCenter gap-6">
                                <button class="font-medium text-blue-600 dark:text-blue-500 hover:underline">save</button>
                                <a href="#" class="closeBtn font-medium text-blue-600 dark:text-blue-500 hover:underline">✗</a>
                            </td>
                        </form>
                        <livewire:product-livewire :id="$value->id"></livewire:product-livewire>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </section>

        {{--Add product--}}
        <section class="w-[90%] flexColumn gap-8">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">【 製品の追加 】</h2>
            <form class="Form flexColumn gap-8" method="post" action="{{route("add-product")}}" enctype="multipart/form-data">
                @csrf
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="p_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"><span class="bg-red-500 text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded-8">必須</span> 製品名</label>
                        <input type="text" name="p_name" id="p_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="製品名" required />
                    </div>
                    <div>
                        <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"><span class="bg-red-500 text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded-8">必須</span> 製品画像</label>
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

