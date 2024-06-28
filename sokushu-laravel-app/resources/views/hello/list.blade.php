<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $appTitle }}：Booksのlist</title>
</head>
<body>
    <h2>foreach文でbooksのlistを取得</h2>
    <table class="table">
        <tr>
            <th>No.</th>
            <th>書籍名</th>
            <th>価格</th>
            <th>出版社</th>
            <th>刊行日</th>
        </tr>
        @foreach($records as $id => $record)
        <tr>
            <td>{{ $id + 1 }}</td>
            <td>{{ $record->title }}</td>
            <td>{{ $record->price }}円</td>
            <td>{{ $record->publisher }}</td>
            <td>{{ $record->published }}</td>
        </tr>
        @endforeach
    </table>
    <h2>コレクションビューを使用</h2>
    <table class="table">
        <tr>
            <th>書籍名</th>
            <th>価格</th>
            <th>出版社</th>
            <th>刊行日</th>
        </tr>
        @each('subviews.book', $records, 'record', 'subviews.empty')
    </table>
</body>
</html>
