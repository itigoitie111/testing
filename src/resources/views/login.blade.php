@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection


@section('content')
<div class="content-logo">
    <a class="content-logo__point" href="localhost/register">Register</a>
</div>

<span class="title__logo">
    <h2 class="title__logo-text">Login</h2>
</span>


<div class="login-text__box">
    <div class="address__box-form">
        <span class="login__text">メールアドレス</span>
        <form class="" action="/admin" method="">
        @csrf
            <div class="login__text-form">
                <input type="text" name="name" placeholder="例:test@example.com">
            </div>
        </form>
    </div>
    <div class="password__box-form">
        <span class="login-text">パスワード</span>
        <form action="/admin">
            @csrf
            <div class="login__text-form">
                <input type="text" name="password" placeholder="例:coachtechno6">
            </div>
        </form>
    </div>
    <div class="login-button__form">
        <form action="/admin" method="post">
            @csrf
            <button type="submit" class="login-button">ログイン</button>
        </form>
    </div>
</div>
@endsection
