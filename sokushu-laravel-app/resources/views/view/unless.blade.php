<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $appTitle }}：unless文</title>
</head>
<body>
    @unless ($random === 50)
        {{ $random }}は50ではありません！
    @endunless
</body>
</html>
