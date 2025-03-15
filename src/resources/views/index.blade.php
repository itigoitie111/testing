@extends('layouts.imitate-app')



@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection




@section('content')
<div class="title__logo-box">
    <h3 class="title__logo">Contact</h3>
</div>

<table class="contact__table-box">
    <tr class="contact__table-row">
        <span class="table__text">
            <th class="table__header">お名前</th>
            <td>
                <form action="/contacts/confirm" class="table-name" method="post">
                    <input name="first-name" type="text" placeholder="例:山田" value="{{ old('first-name') }}">
                </form>
                <span class="error-message">
                @error('first-name')
                {{ $message }}
                @enderror
                </span>
                <form action="/contacts/confirm" class="table-name">
                    <input type="text" name="last-name" method="post"  placeholder="例:太郎" value="{{ old('last-name') }}">
                </form>
                <span class="error-message">
                @error('last-name')
                {{ $message }}
                @enderror
                </span>
            </td>
        </span>
    </tr>

    <tr class="contact__table-row">
        <span class="table__text">
        <th class="table__header">性別</th>
            <td>
                <form action="/contacts/confirm" method="post">
                    <input type="radio" name="gender" value="{{ old('gender') }}">男性
                    <input type="radio" name="gender" value="{{ old('gender') }}">女性
                    <input type="radio" name="gender" value="{{ old('gender') }}">その他
                </form>
                <span class="error-message">
                @error('gender')
                {{ $message }}
                @enderror
                </span>
            </td>
        </span>
    </tr>

    <tr class="contact__table-row">
        <th class="table__header">メールアドレス</th>
        <span class="table__text">
            <td>
                <form action="/contacts/confirm" method="">
                    <input type="text" name="email" placeholder="例:test@example.com" value="{{ old('email') }}">
                </form>
                <span class="error-message">
                @error('email')
                {{ $message }}
                @enderror
                </span>
            </td>
        </span>
    </tr>

    <tr class="contact__table-row">
        <th class="table__header">電話番号</th>
        <span class="table__text">
            <td>
                <form action="/contacts/confirm" method="post">
                    <input type="text" name="tell" placeholder="080" value="{{ old('tell') }}">-
                    <input type="text" name="tell" placeholder="1234" value="{{ old('tell') }}">-
                    <input type="text" name="tell" placeholder="5678" value="{{ old('tell') }}">
                </form>
                <span class="error-message">
                @error('tell')
                {{ $message }}
                @enderror
                </span>
            </td>
        </span>
        <span></span>
    </tr>

    <tr class="contact__table-row">
        <th class="table__header">住所</th>
        <span class="table__text">
            <td>
                <form action="/contacts/confirm" method="post">
                    <input type="text" name="address" placeholder="東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}">
                </form>
                <span class="error-message">
                @error('address')
                {{ $message }}
                @enderror
            </span>
            </td>
        </span>
    </tr>

    <tr class="contact__table-row">
        <th class="table__header">建物名</th>
        <span class="error-message"></span>
        <span class="table__text">
            <td>
                <form action="/contacts/confirm" method="post">
                    <input type="text" name="building" placeholder="千駄谷マンション101" value="{{ old('building') }}">
                </form>
            </td>
        </span>
    </tr>

    <tr class="contact__table-row">
        <th class="table__header">お問い合わせ種類</th>
        <span class="table__text">
            <td>
                <form action="/contacts/confirm" method="post">
                    <input type="checkbox" name="detail" placeholder="選択してください" value="{{ old('detail') }}">
                </form>
                <span class="error-message">
                @error('detail')
                {{ $message }}
                @enderror
                </span>
            </td>
        </span>
    </tr>

    <tr class="contact__table-row--last">
        <th class="table__header">お問い合わせ内容</th>
        <span>
            <td>
                <form action="/contacts/confirm" method="post">
                    <textarea type="text" name="detail" placeholder="お問い合わせ内容をご記載ください" row="4" cols="50" value="{{ old('content') }}"></textarea>
                </form>
                <span class="error-message">
                @error('content')
                {{ $message }}
                @enderror
                </span>
            </td>
        </span>
    </tr>
</table>




<div class="submit__button-form">
    <form action="/contacts/confirm" class="submit" method="post">
        @csrf
        <button class="submit__button" type="submit">確認画面</button>
    </form>
</div>

@endsection









