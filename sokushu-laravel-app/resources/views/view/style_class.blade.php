<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $appTitle }}：クラスの動的設定</title>
    <style>
        .red{
            color: red;
        }
        .bold-text {
            font-weight: bold;
        }
        .underline-text {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <p @class([
        'red',
        'bold-text' => $isEnabled,
        'underline-text' => !$isEnabled,
    ])>
        classディレクティブで動的にclassを設定する。
    </p>
</body>
</html>
