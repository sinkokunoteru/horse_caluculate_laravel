@extends('layouts/base')

@section('title', '登録完了')
@section('css')
<link rel="stylesheet" href="{{ asset('css/finish.css') }}">
@endsection

@section('content')
    <div class="main-content">
        <h1>{{$msg}}</h1>
        <button><a href="{{route($link)}}">{{$value}}</a></button>
    </div>

@endsection


