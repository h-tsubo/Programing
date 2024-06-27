<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $appTitle }}：foreach文で連想配列</title>
</head>
<body>
    <h2>メンバー1</h2>
    <ul>
        @foreach ($member1 as $key => $value)
            <li>{{ $key }} : {{ $value }}</li>
        @endforeach
    </ul>
    <h2>メンバー2</h2>
    <ul>
        @foreach ($member2 as $key => $value)
            <li>{{ $key }} : {{ $value }}</li>
        @endforeach
    </ul>
</body>
</html>
