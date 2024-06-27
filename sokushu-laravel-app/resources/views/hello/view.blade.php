<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $appTitle }}：Hello world!</title>
</head>
<body>
{{ $msg }}
<div>
    <ul>
        <li>現在の日時：{{ date('Y 年 m 月 d 日 h:i:s') }}</li>
    </ul>
</div>
</body>
</html>
