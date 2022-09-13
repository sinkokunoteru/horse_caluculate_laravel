@extends('layouts/base')

@section('title', 'アカウント情報')
@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('content')
    <div class="main-content">
        <h1>アカウント情報</h1>
        {{-- コンポーネント等で分けたほうがいいかも --}}
        <div class="nav-content">
            <nav>  
                <ul class="nav-list">
                    <li><a href={{ route('mypage') }} class="nav-list-item navI">COMMUNITY LIST</a></li>
                    <li class="current"><a href={{ route('account') }} class="nav-list-item navI">ACCOUNT</a></li>
                </ul>
            </nav>
        </div>{{-- /nav-content --}}
        <div class="users-content"> 
            <div class="users-item">ユーザーID：{{$user->user_id}}</div>
            <div class="users-item">ユーザーネーム：{{$user->user_name}}</div>
            <div class="users-item">メールアドレス：{{$user->email}}</div>
            <div class="users-item">生年月日：{{date_format($birth, 'Y年m月d日');}}</div>
            <div class="users-item">性別：{{$user->gender}}</div>
            <div class="users-item"><a href="{{route('account.edit')}}">アカウント情報編集</a></div>
        </div>{{-- /users-content --}}
    </div>{{-- /main-content --}}
@endsection