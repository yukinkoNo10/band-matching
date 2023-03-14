@extends('layouts.default')
@section('title', '会員登録')

@section('content')
    <div class="flex justify-center w-hull bg-opacity-25">
        <div class="py-10 mb-20">
            <form class="border p-10 shadow-xl rounded-lg bg-pink-50" action="{{ route('users.store') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <h1 class="text-center mb-5 text-3xl">Create My Account</h1>
                <div class="mb-4">
                    <label class="block text-sm font-medium mb-2 @error('name') is_invalid @enderror"
                        for="name">ユーザー名</label>
                    <input id="name" class="block w-full px-4 py-3 mb-2 text-sm bg-white border rounded" type="text"
                        name="name" value="{{ old('name') }}">
                    @error('name')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium mb-2 @error('email') is_invalid @enderror"
                        for="email">メールアドレス</label>
                    <input id="email" class="block w-full px-4 py-3 mb-2 text-sm bg-white border rounded" type="email"
                        name="email" value="{{ old('email') }}">
                    @error('email')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium mb-2 @error('password') is_invalid @enderror"
                        for="password">パスワード</label>
                    <input id="password" class="block w-full px-4 py-3 mb-2 text-sm bg-white border rounded"
                        type="password" name="password">
                    @error('password')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium mb-2"
                        for="confirm_password @error('confirm_password') is_invalid @enderror">パスワード(確認)</label>
                    <input id="confirm_password" class="block w-full px-4 py-3 mb-2 text-sm bg-white border rounded"
                        type="password" name="confirm_password">
                    @error('confirm_password')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium mb-2 @error('image') is_invalid @enderror"
                        for="image">画像</label>
                    <div class="flex items-end">
                        <img id="previewImage" src="/images/noimage.jpg" data-noimage="/images/noimage.jpg" alt=""
                            class="rounded-full shadow-md w-32 mb-2">
                        <input id="image" class="block w-full px-4 py-3 mb-2" type="file" accept='image/*'
                            name="image">
                    </div>
                    @error('image')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium mb-2"
                        for="introduction @error('introduction') is_invalid @enderror">自己紹介</label>
                    <textarea id="introduction" class="block w-full px-4 py-3 mb-2 text-sm bg-white border rounded" name="introduction"
                        rows="4">{{ old('introduction') }}</textarea>
                </div>
                @error('introduction')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
                <button type="submit"
                    class="ml-40 mt-10 border rounded-md py-1 px-2 w-48 shadow-md bg-white hover:bg-red">新規作成</button>
            </form>
        </div>

    </div>
    <script>
        //画像プレビュー
        document.getElementById('image').addEventListener('change', e => {
            const previewImageNode = document.getElementById('previewImage')
            const fileReader = new FileReader()
            fileReader.onload = () => previewImageNode.src = fileReader.result
            if (e.target.files.length > 0) {
                fileReader.readAsDataURL(e.target.files[0])
            } else {
                previewImageNode.src = previewImageNode.dataset.noimage
            }
        })
    </script>
@endsection
