<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/tailwind/tailwind.min.css">
    <title> @yield('title')</title>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
</head>
<body>
    <div class="w-full h-full font-serif min-h-screen box-border relative">
        <header class="flex justify-between bg-gradient-to-r from-purple-500 to-pink-500 w-full py-3 px-20">
            <h1 class="text-3xl text-white text-blue-900 cursor-default">Let's Band!</h1>
            <div class="">
                <button class="mx-1 border border-white  font-semibold text-white py-2 px-4 rounded-lg hover:bg-white hover:text-pink-600"><a href="{{ route('users.create') }}">会員登録</a></button>
                <button class="mx-1 border border-white  font-semibold text-white py-2 px-4 rounded-lg hover:bg-white hover:text-pink-500"><a href="{{ route('users.login') }}">ログイン</a></button>
            </div>
        </header>
        <main class="flex justify-center w-hull bg-opacity-25">
            @yield('content')
        </main>
        <footer class="w-full bg-gray-100 fixed bottom-0">
            <div class="flex justify-center">
                <div class="py-3 px-20">
                    <h1 class="text-xl">Let's Band!</h1>
                    <p>&copy;2023 Sample.Inc</p>
                </div>
                <div>
                    <p class="hover:underline hover:font-semibold"><a href="">About</a></p>
                    <p class="hover:underline hover:font-bold"><a href="">利用規約</a></p>
                    <p class="hover:underline hover:font-bold"><a href="">お問い合わせ</a></p>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>