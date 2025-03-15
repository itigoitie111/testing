@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection





@section('content')
<div class="content-logo">
    <a class="content-logo__point" href="localhost/register">login</a>
</div>

<span class="title__logo">
    <h2 class="title__logo-text">Register</h2>
</span>


<div class="register__text-box">

    <div class="register__name-form">
        <span class="register-text">お名前</span>
        <form action="/login" method="post">
            @csrf
            <div class="register__text-form">
                <input type="text" name="name" placeholder="例:山田 太郎">
            </div>
        </form>
    </div>

    <div class="register__email-form">
        <span class="register__text">メールアドレス</span>
        <form action="/login" method="post">
        @csrf
            <div class="register__text-form">
                <input type="text" name="email" placeholder="例:test@example.com">
            </div>
        </form>
    </div>

    <div class="register__password-form">
        <span class="register-text">パスワード</span>
        <form action="/login" method="post">
            @csrf
            <div class="register__text-form">
                <input type="text" name="password" placeholder="例:coachtechno6">
            </div>
        </form>
    </div>

    <div class="register__button-form">
        <form action="/login" method="post">
            @csrf
            <button type="submit" class="register-button">ログイン</button>
        </form>
    </div>
</div>
@endsection






