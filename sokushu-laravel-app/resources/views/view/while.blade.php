<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $appTitle }}：while文</title>
</head>
<body>
    @php
        $i = 0;
    @endphp
    @while ($i < 6)
        @php
            $i++;
        @endphp
        <h{{ $i }}>{{ $i }}番目です。</h{{ $i }}>
    @endwhile
</body>
</html>
