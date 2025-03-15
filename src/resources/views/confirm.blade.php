@extends('layouts.imitate-app')


@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection



@section('content')

<div class="title__logo-box">
    <h3 class="title__logo">Confirm</h3>
</div>


<table class="table__box">

    <tr>
        <th class="table__name">お名前</th>
        <td class="">
            <form class="table__content" action="/contacts" method="post">
                <input type="text" name="name" value="{{ $contact['name'] }}">
            </form>
        </td>
    </tr>

    <tr>
        <th class="table__name">性別</th>
        <td>
            <form class="table__content" action="/contacts" method="post">
                <input type="text" name="gender" value="{{ $contact['gender'] }}">
            </form>
        </td>
    </tr>

    <tr>
        <th class="table__name">メールアドレス</th>
        <td>
            <form class="table__content" action="/contacts" method="post">
                <input type="text" name="email" value="{{ $contact['email'] }}">
            </form>
        </td>
    </tr>

    <tr>
        <th class="table__name">電話番号</th>
        <td>
            <form class="table__content" action="/contacts" method="post">
                <input type="text" name="tell" value="{{ $contact['tell'] }}">
            </form>
        </td>
    </tr>

    <tr>
        <th class="table__name">住所</th>
        <td>
            <form action="" class="table__content"><input type="text" name="address" value="{{ $contact['address'] }}"></form>
        </td>
    </tr>

    <tr>
        <th class="table__name">建物名</th>
        <td>
            <form action="" class="table__content"><input type="text" name="building" value="{{ $contact['building'] }}"></form>
        </td>
    </tr>

    <tr>
        <th class="table__name">お問い合わせの種類</th>
        <td>
            <form class="table__content" action="/contacts" method="post">
                <input type="text" name="detail" value="{{ $contact['detail'] }}">
            </form>
        </td>
    </tr>

    <tr>
        <th class="table__name">お問い合わせ内容</th>
        <td>
            <form class="table__content" action="/contacts" method="post">
                <input type="text" name="content" value="{{ $contact['content'] }}">
            </form>
        </td>
    </tr>

</table>

<div class="form__button">
    <form action="/contacts/thanks" method="post">
        @csrf
        <button class="form__button-submit" type="submit">送信</button>
    </form>
</div>


<span class="link__text-box">
    <a class="link__text" href="/">修正</a>
</span>
@endsection