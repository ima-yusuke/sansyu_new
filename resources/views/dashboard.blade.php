<x-dash-layout>

    <div class="py-12">
        <div class="flexCenter flex-wrap gap-8 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flexColumnCenter text-center border-4 border-solid border-black bg-white w-[30%]">
                <a href="{{route("show-event")}}" class="w-full h-full hover:bg-black hover:text-white p-3">
                    <div class="flexColumnCenter gap-4">
                        <p><i class="fa-solid fa-calendar-days text-4xl"></i></p>
                        <p class="font-bold">イベント</p>
                    </div>
                </a>
            </div>
            <div class="flexColumnCenter text-center border-4 border-solid border-black bg-white w-[30%]">
                <a href="{{route("show-product")}}" class="w-full h-full hover:bg-black hover:text-white p-3">
                    <div class="flexColumnCenter gap-4">
                        <p><i class="fa-solid fa-truck-moving text-4xl"></i></p>
                        <p class="font-bold">製品</p>
                    </div>
                </a>
            </div>
            <div class="flexColumnCenter text-center border-4 border-solid border-black bg-white w-[30%]">
                <a href="{{route("show-message")}}" class="w-full h-full hover:bg-black hover:text-white p-3">
                    <div class="flexColumnCenter gap-4">
                        <p><i class="fa-solid fa-message text-4xl"></i></p>
                        <p class="font-bold">メッセージ</p>
                    </div>
                </a>
            </div>
            <div class="flexColumnCenter text-center border-4 border-solid border-black bg-white w-[30%]">
                <a href="{{route("show-interview")}}" class="w-full h-full hover:bg-black hover:text-white p-3">
                    <div class="flexColumnCenter gap-4">
                        <p><i class="fa-solid fa-users text-4xl"></i></p>
                        <p class="font-bold">社員インタビュー</p>
                    </div>
                </a>
            </div>
            <div class="flexColumnCenter text-center border-4 border-solid border-black bg-white w-[30%]">
                <a href="{{route("show-job_opening")}}" class="w-full h-full hover:bg-black hover:text-white p-3">
                    <div class="flexColumnCenter gap-4">
                        <p><i class="fa-solid fa-magnifying-glass text-4xl"></i></p>
                        <p class="font-bold">募集職種・募集要項</p>
                    </div>
                </a>
            </div>
            <div class="flexColumnCenter text-center border-4 border-solid border-black bg-white w-[30%]">
                <a href="{{route("show-benefit")}}" class="w-full h-full hover:bg-black hover:text-white p-3">
                    <div class="flexColumnCenter gap-4">
                        <p><i class="fa-solid fa-house text-4xl"></i></p>
                        <p class="font-bold">待遇・福利厚生</p>
                    </div>
                </a>
            </div>
            <div class="flexColumnCenter text-center border-4 border-solid border-black bg-white w-[30%]">
                <a href="{{route("show-question")}}" class="w-full h-full hover:bg-black hover:text-white p-3">
                    <div class="flexColumnCenter gap-4">
                        <p><i class="fa-solid fa-question text-4xl"></i></p>
                        <p class="font-bold">よくある質問</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

</x-dash-layout>
