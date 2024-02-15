<x-dashboard>

    {{--イベント追加--}}
    <form class="Form" method="post" action="{{route("add-event")}}">
        @csrf
        <div>
            <p>タイトル</p>
            <input type="text" placeholder="タイトル" name="title">
        </div>
        <div>
            <p>カテゴリー</p>
            <select name="category" class="Form-Item-Input">
                <option value=1>インターンシップ情報</option>
                <option value=2>説明会情報</option>
            </select>
        </div>
        <div>
            <p>開始時刻</p>
            <input type="date" name="date">
        </div>


        <input type="submit" class="Form-Btn fa addbtn" value="&#xf00c; 登録">
    </form>

    {{--カテゴリー追加--}}
    <form class="Form" method="post" action="{{route("add-category")}}">
        @csrf
        <div>
            <p>カテゴリー名</p>
            <input type="text" placeholder="カテゴリー" name="category_name">
        </div>

        <input type="submit" class="Form-Btn fa addbtn" value="&#xf00c; 登録">
    </form>

    <button><a href="{{route("test")}}">test</a></button>
</x-dashboard>
