<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $appTitle }}：for文</title>
</head>
<body>
    @php
        $i = 0;
    @endphp
    @for($i=1; $i<=6; $i++)
        <h{{ $i }}>{{ $i }}番目です。</h{{ $i }}>
    @endfor
    @php
        $j = 0;
    @endphp
    @for($j=6; $j>0; $j--)
        <h{{ $j }}>{{ $j }}番目です。</h{{ $j }}>
    @endfor
</body>
</html>
