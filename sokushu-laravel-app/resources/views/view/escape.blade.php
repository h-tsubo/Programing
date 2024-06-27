<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $appTitle }}：htmlエスケープ</title>
</head>
<body>
    <h1>htmlエスケープ</h1>
    <h2>htmlがそのまま表示される。</h2>
    <div style="border: 1px solid black;">
        {{ $msg }}
    </div>
    <h2>htmlを読み込んでリストとして表示される。</h2>
    <div style="border: 1px solid black;">
        {!! $msg !!}
    </div>
    <h2>マスダッシュの無効化</h2>
    <div style="border: 1px solid black;">
        @{{ $msg }}
        <h3>複数個まとめて無効化</h3>
        @verbatim
        <ul>
            <li>{{ $msg }}</li>
            <li>{{ $msg }}</li>
            <li>{{ $msg }}</li>
        </ul>
        @endverbatim
    </div>

</body>
</html>
