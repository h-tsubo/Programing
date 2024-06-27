<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $appTitle }}：選択状態を動的に設定</title>
</head>
<body>
    <input
        name="name"
        type="checkbox"
        @checked($isEnabled)
    />
    <br>
    <select name="country">
        <option value="us" @selected(!$isEnabled)>United States</option>
        <option value="jp" @selected($isEnabled)>Japan</option>
    </select>
</body>
</html>

