<link rel="stylesheet" href="{{ asset('css/header.css') }}">
<div class="msg">
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        {{-- ログインしていれば名前とログアウトリンク表示 --}}
        @if (Auth::check())
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                <a>{{Auth::user()->user_name}}</a>
                <a href="{{route('logout')}}">ログアウト</a>
        {{-- ログインしていなければログインリンクと新規登録リンク --}}
        @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">ログイン</a>
                <a href={{ route('register') }} class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">新規登録</a>
            </div>
        @endif
    </div>
    <nav>
        <ul class="nav-list ">
            <li><a href={{ route('home') }} class="nav-list-item navI">HOME</a></li>
            <li><a href={{ route('mypage') }} class="nav-list-item navI">MY PAGE</a></li>
            <li><a href={{ route('register') }} class="nav-list-item navI">COMMUNITY</a></li>
            <li><a href={{ route('register') }} class="nav-list-item navI">GUIDE</a></li>
        </ul>
    </nav>
</div>

