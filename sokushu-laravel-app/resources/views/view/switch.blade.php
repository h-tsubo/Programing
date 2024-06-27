<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $appTitle }}：swtich文</title>
</head>
<body>
    <h2>switch文占い</h2>
    <p>$random：{{ $random }}の値に応じて占い結果が表示されます。</p>
    @switch($random)
        @case(5)
            <p>大吉！</p>
            @break
        @case(4)
            <p>吉！</p>
            @break
        @case(3)
            <p>中吉！</p>
            @break
        @case(2)
            <p>末吉！</p>
            @break
        @case(1)
            <p>凶！</p>
            @break
        @default
            <p>大凶！</p>

    @endswitch
</body>
</html>
