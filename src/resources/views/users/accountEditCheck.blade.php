@extends('layouts/base')

@section('title', 'アカウント情報編集確認')
@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('content')
    <div class="main-content">
        <h1>アカウント情報編集確認</h1>
        @include('includes.navi')
        <div class="users-content">
            <p>下記の情報を更新します。本当によろしいですか？</p>
            <form method="POST" action="{{ route('account.update') }}">
                @method('patch')
                @csrf
                @if (isset($userName))
                <p>新しいユーザー名：{{$userName}}</p>
                <input type="hidden" name="user_name" value="{{$userName}}">
                @endif
                @if (isset($email))
                <p>新しいメールアドレス：{{$email}}</p>
                <input type="hidden" name="email" value="{{$email}}">
                @endif
                @if (isset($password))
                <p>新しいパスワード：{{$password}}</p>
                <input type="hidden" name="password" value="{{$password}}">
                @endif
                <input type="submit" value="変更">
            </form>
        </div>
    </div>
@endsection