@extends('layouts/base')

@section('title', 'アカウント情報編集')
@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('content')
    <div class="main-content">
        <h1>アカウント情報編集</h1>
        @include('includes.navi')
        <div class="users-content">
            <form method="POST" action={{ route('account.edit.check') }}>
                @csrf
                <div class="users-item">ユーザー名：{{$user->user_name}}</div>
                <div class="users-item">
                    <label for="user_name">新しいユーザー名：</label>
                    <input type="text" name="user_name">
                </div>
                <div class="users-item">メールアドレス：{{$user->email}}</div>
                <div class="users-item">
                    <label for="email">新しいメールアドレス：</label>
                    <input type="email" name="email">
                </div>
                <div class="users-item">パスワード：**********</div>
                <div class="users-item">
                    <label for="password">新しいパスワード：</label>
                    <input type="password" name="password">
                </div>
                <div class="users-item">
                    <label for="password_confirmation">新しいパスワード(確認用)：</label>
                    <input type="password" name="password_confirmation">
                </div>
                <div class="users-item"><input type="submit" value="変更"></div>
        </div>{{-- /users-content --}}
    </div>{{-- /main-content --}}
@endsection