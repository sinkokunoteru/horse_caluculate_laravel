@extends('layouts/base')

@section('title', 'アカウント情報')
@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
<script src="{{ asset('/js/mypage.js') }}"></script>
@endsection

@section('content')
    <div class="main-content">
        <h1>アカウント情報</h1>
        @include('includes.navi')
        <div class="alert" id="alert">
            @if(session('status'))
            <div class="alert-area">
                <div class="alert-clear">
                    <button class="alert-clear__button" onclick="clearAlert()">×</button>
                </div>
                <h2>{{ session('status') }}</h2>
            </div>
            @endif
        </div>
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