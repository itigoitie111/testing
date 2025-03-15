@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection


@section('content')
<div class="content__box">
    <div class="content__back-text">Thank you</div>
        <h3>お問い合わせありがとうございました</h3>
        <a class="home__access" action="/">HOME</a>
    </div>
</div>
@endsection


