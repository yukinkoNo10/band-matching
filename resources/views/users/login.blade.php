@extends('layouts.default')
@section('title', 'ログイン')

@section('content')
<div class="py-10">
    <form class="border p-10 shadow-xl rounded-lg bg-pink-50">
        <h1 class="text-center mb-5 text-3xl">Login</h1>
        <p><input class="border py-1 px-2 mb-2 rounded-md" type="text" placeholder="Email"/></p>
        <p><input class="border py-1 px-2 mb-2 rounded-md" type="password" placeholder="Password"/></p>
        <button type="submit" class="border rounded-md py-1 px-2 w-48 shadow-md bg-white hover:bg-red">Login</button>
    </form>
</div>
@endsection