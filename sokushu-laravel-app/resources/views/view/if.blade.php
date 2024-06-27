<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $appTitle }}：if文</title>
</head>
<body>
    @env('local')
        @if ($random < 50)
            {{ $random }}は50未満です。
        @elseif($random < 70)
            {{ $random }}は50以上70未満です。
        @else
            {{ $random }}は50以上です。
        @endif
    @endenv
</body>
</html>
