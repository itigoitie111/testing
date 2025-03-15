<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{ asset('css/imitate.common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <title>確認テスト〜「お問い合わせフォーム」〜</title>
    @yield('css')
</head>

<body>

<div class="content">
    <header class="header">
        <h1 class="header__title">FashionablyLate</h1>
    </header>

        <main>
        @yield('content')
        </main>
</div>

</body>
</html>