@extends('layouts/base')

@section('title', '新規会員登録')
@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
    <div class="form-wrapper">
        <h1>新規会員登録</h1>
        @if ($errors->any())
            <div class="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{route('register_check')}}" method="post">
            @csrf
            <div class="form-item">
                <label for="email">メールアドレス</label>
                <input type="email" name="email" required="required">
            </div>

            <div class="form-item">
                <label for="password">パスワード</label>
                <input type="password" name="password" required="required">
            </div>

            <div class="form-item">
                <label for="password_confirmation">パスワード(確認用)</label>
                <input type="password" name="password_confirmation" required="required">
            </div>

            <div class="form-item">
                <label for="user_name">ユーザー名</label>
                <input type="text" name="user_name" required="required">
            </div>

            <div class="form-item">
                <label for="user_id">ユーザーID</label>
                <input type="text" name="user_id" required="required">
            </div>

            <div class="form-item">
                <label for="birth">生年月日</label>
                <input type="date" name="birth" value="1995-01-01" required="required">
            </div>

            <div class="gender-box">
                性別　　
                <div class="form-item">
                    <label for="male">男</label>
                    <input type="radio" name="gender" value="0" >
                </div>

                <div class="form-item">
                    <label for="female">女</label>
                    <input type="radio" name="gender" value="1" >
                </div>
            </div>

            <div class="button-panel">
                <input type="submit" class="button" title="Sign In" value="新規登録" >
            </div>
        </form>
</div>
@endsection


