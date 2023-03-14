@extends('layouts.default')
@section('title', 'Let\'s band!')
@section('content')
<style>
    .back {
     background-image: url(/images/audience-g361c0cc99_1920.jpg);
    } 
 </style>
<div class="back w-full h-full min-h-screen text-gray-200">
    <h1 class="pt-8 text-center text-6xl cursor-default">ピッタリのバンドがきっと見つかる！</h1>
    <div class="text-center py-20 my-10 mx-auto rounded-lg w-6/12 bg-gray-600 bg-opacity-75">
        <div>
            <p class="mb-4">バンドをしてみたいけど仲間探しのハードルが高い・・・</p>
            <p class="mb-4">プロ志向のメンバーがほしいけど探すのが大変・・・</p>
            <p class="mb-4">そんなあなたの悩みを解消します！</p>
            <p class="mb-8">Let's Band!なら同じ志をもった仲間とマッチング！</p>
        </div>
        <h1 class="text-3xl mb-8">さあ、今すぐLet's Band！</h1>
        <div>
            <p class="mb-4"><a class="mb-4" href="{{ route('login.index') }}">サインインはこちら</a></p>
            <p><a class="mb-4" href="{{ route('users.create') }}">無料会員登録はこちら</a></p>
        </div>
    </div>
</div>
@endsection