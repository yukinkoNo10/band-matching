<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/tailwind/tailwind.min.css">
    <title> @yield('title')</title>
</head>

<body>
    <div class="w-full h-full font-serif min-h-screen box-border relative">
        <header class="flex justify-between bg-gradient-to-r from-purple-500 to-pink-500 w-full py-3 px-20">
            <h1 class="text-center h-10 leading-10 my-auto text-3xl text-white text-blue-900 cursor-default"><a
                    href="{{ route('users.index') }}">Let's Band!</a></h1>
            @if (\Auth::user())
                <div class="flex">
                    <form class="my-auto" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button
                            class="border border-white h-12 font-semibold text-white py-2 px-4 rounded-lg hover:bg-white hover:text-pink-600">ログアウト</button>
                    </form>
                    <div class="flex">
                        <a href="{{ route('mypage.index', ['id' => \Auth::user()->id]) }}"><img
                                class="ml-10 mt-2 rounded-full shadow-md w-16 mb-2"
                                src="{{ asset('storage/' . \Auth::user()->image) }}" alt=""></a>
                    </div>
                </div>
            @else
                <div class="">
                    <a href="{{ route('users.create') }}"><button
                            class="mx-1 border border-white  font-semibold text-white py-2 px-4 rounded-lg hover:bg-white hover:text-pink-600">会員登録</button></a>
                    <a href="{{ route('login.index') }}"><button
                            class="mx-1 border border-white  font-semibold text-white py-2 px-4 rounded-lg hover:bg-white hover:text-pink-500">ログイン</button></a>
                </div>
            @endif
        </header>
        <main>
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
