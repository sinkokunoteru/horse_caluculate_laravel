@extends('layouts/base')

@section('title', 'ログイン')
@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
    <div class="main-content">
        <form action="{{route('login')}}" method="post">
            @csrf

            <div class="form-item">
                <label for="email">メールアドレス</label>
                <input type="text" name="email" >
            </div>
            
            <div class="form-item">
                <label for="password">パスワード</label>
                <input type="password" name="password" >
            </div>

            <input type="submit" value="ログイン">
        </form>
    </div>



@endsection