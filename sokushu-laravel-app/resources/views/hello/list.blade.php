<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $appTitle }}：Booksのlist</title>
</head>
<body>
    <table class="table">
        <tr>
            <th>書籍名</th>
            <th>価格</th>
            <th>出版社</th>
            <th>刊行日</th>
        </tr>
        @foreach($records as $record)
        <tr>
            <th>{{ $record->title }}</th>
            <th>{{ $record->price }}円</th>
            <th>{{ $record->publisher }}</th>
            <th>{{ $record->published }}</th>
        </tr>
        @endforeach
    </table>
</body>
</html>
