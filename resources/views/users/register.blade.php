@extends('layouts.default')
@section('title', '会員登録')

@section('content')
<div class="py-10">
    <form class="border p-10 shadow-xl rounded-lg bg-pink-100">
        <h1 class="text-center mb-5 text-3xl">Create My Account</h1>
        <p class="text-right">ユーザー名: <input class="border py-1 px-2 mb-2 rounded-md" type="text" placeholder="Username"/></p>
        <p class="text-right">Eメール: <input class="border py-1 px-2 mb-2 rounded-md" type="text" placeholder="Email"/></p>
        <p class="text-right">パスワード: <input class="border py-1 px-2 mb-2 rounded-md" type="password" placeholder="Password"/></p>
        <p class="text-right">確認用: <input class="border py-1 px-2 mb-2 rounded-md" type="password" placeholder="ConfirmPassword"/></p>
        <button type="submit" class="ml-12 mt-10 border rounded-md py-1 px-2 w-48 shadow-md bg-white hover:bg-red">登録</button>
    </form>
</div>
@endsection