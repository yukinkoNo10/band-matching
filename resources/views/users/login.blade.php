@extends('layouts.default')
@section('title', 'ログイン')

@section('content')
    <div class="py-20">
        @if ($errors->any())
            <div class="h-8">
                <p class="text-center text-red-500">ログインに失敗しました。</p>
            </div>
        @endif
        <div class="flex justify-center w-hull bg-opacity-25">
            <div>
                <form class="border p-10 shadow-xl rounded-lg bg-pink-50" action="{{ route('login') }}" method="POST">
                    @csrf
                    <h1 class="text-center mb-5 text-3xl">Login</h1>
                    <p><input class="border py-1 px-2 mb-5 rounded-md" name="email" type="text" placeholder="Email" value="{{ old('email') }}" /></p>
                    <p><input class="border py-1 px-2 mb-5 rounded-md" name="password" type="password" placeholder="Password" /></p>
                    <label>ログインを維持する: <input type="checkbox" name="is_remember" value="1"></label><br>
                    <button type="submit"
                        class="border rounded-md mt-10 py-1 px-2 w-48 shadow-md bg-white hover:bg-red">Login</button>
                </form>
            </div>
        </div>
    </div>
@endsection
