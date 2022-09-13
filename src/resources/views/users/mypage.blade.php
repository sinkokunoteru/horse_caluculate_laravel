@extends('layouts/base')

@section('title', 'マイページ')
@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('content')
    <div class="main-content">
        <h1>マイページ</h1>
        {{-- コンポーネント等で分けたほうがいいかも --}}
        <div class="nav-content">
            <nav>  
                <ul class="nav-list">           
                    <li class="current"><a href={{ route('mypage') }} class="nav-list-item navI">COMMUNITY LIST</a></li>
                    <li><a href={{ route('account') }} class="nav-list-item navI">ACCOUNT</a></li>
                </ul>
            </nav>
        </div>{{-- /nav-content --}}
        <div class="community-content"> 
            <div class="community-item">
                <div class="follow-content">
                    {{-- フォロー、フォロワー数カウントメソッドをコントローラーで作成してここにデータ渡す予定 --}}
                    <div class="follow-item"><a href="{{ route('mypage') }}">(n)フォロー中</a></div>
                    <div class="follow-item"><a href="{{ route('mypage') }}">(n)フォロワー</a></div>
                </div>
            </div>
            <div class="community-item">
                <div class="thread-content">
                    <h3>参加中の掲示板</h3>
                    {{-- 参加中スレッド一覧取得メソッドをコントローラーで作成してここにforeachでデータ渡す予定 --}}
                    <div class="thread-item"><a href="{{ route('mypage') }}">参加中の掲示板１：</a>各情報も表示予定</div>
                        <div class="thread-item"><a href="{{ route('mypage') }}">参加中の掲示板２：</a>各情報も表示予定</div>
                </div>
            </div>
            <div class="community-item">
                <div class="predict-content">
                    <h3>予想履歴</h3>
                    {{-- 予想履歴一覧取得メソッドをコントローラーで作成してここにn個までデータ渡す予定 --}}
                    <div class="predict-item"><a href="{{ route('mypage') }}">予想履歴１：</a>日付等各情報も表示予定</div>
                    <div class="predict-item"><a href="{{ route('mypage') }}">予想履歴２：</a>日付等各情報も表示予定</div>
                </div>
            </div>
        </div>{{-- /community-content --}}
    </div>{{-- /main-content --}}
@endsection