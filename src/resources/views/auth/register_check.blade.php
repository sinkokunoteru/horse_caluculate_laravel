@extends('layouts/base')

@section('title', '登録情報確認')
@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
    <div class="main-content">
        <h1>登録情報確認</h1>
        <div class="form-item">メールアドレス：{{$email}}</div>

        <div class="form-item">パスワード：**********</div>

        <div class="form-item">ユーザー名：{{$user_name}}</div>

        <div class="form-item">ユーザーID：{{$user_id}}</div>
        
        <div class="form-item">生年月日：{{date_format($birth_view, 'Y年m月d日');}}</div>

        <div class="form-item">性別：
            @if ($gender === '0')
            男
            @else
            女
            @endif
        </div>
    </div>

    <form action="{{route('register')}}" method="post">
        @csrf
        <input type="hidden" name="email" value="{{$email}}">
        <input type="hidden" name="password" value="{{$password}}">
        <input type="hidden" name="user_name" value="{{$user_name}}">
        <input type="hidden" name="user_id" value="{{$user_id}}">
        <input type="hidden" name="birth" value="{{$birth}}">
        <input type="hidden" name="gender" value="{{$gender}}">
        <input type="submit" value="登録">
    </form>

@endsection


