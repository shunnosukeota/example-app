<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ $title ?? 'プレツイ' }}</title>
    @stack('css')
</head>
<body class="bg-gray-50">
    <header class="fixed w-full opacity-90 bg-gray-50 border-b border-yellow-500 z-20">
        <h2 class="text-yellow-500 text-4xl py-2 pl-3 float-left">
            プレツイ
        </h2>
        @auth
        @csrf
        <a href="{{ route('tweet.my.index') }}" class="text-gray-600 float-right p-4 justify-end hover:bg-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
        </a>
        @endauth
    </header>
    {{ $slot }}
    <footer class="footer w-full opacity-90 bg-gray-50 border-t border-yellow-500 z-20">
        <h2 class="text-white text-4xl py-2 pl-3 float-left">
            プレツイ
        </h2>
        @auth
        <form method="post" action="{{ route('logout') }}" class="float-right pt-4">
            @csrf
            <div class="justify-end pb-2 px-4">
                <button
                        class="text-sm text-gray-500 hover:text-gray-800"
                        onclick="event.preventDefault(); this.closest('form').submit();"
                >ログアウト</button>
            </div>
        </form>
        @endauth
    </footer>
</body>
</html>

