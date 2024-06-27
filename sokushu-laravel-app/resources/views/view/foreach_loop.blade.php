<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $appTitle }}：ループ変数の実装</title>
</head>
<body>
    <table class="table">
        <tr>
            <th>値</th>
            <th>index</th>
            <th>iteration</th>
            <th>remaining</th>
            <th>count</th>
            <th>first</th>
            <th>last</th>
            <th>even</th>
            <th>odd</th>
            <th>depth</th>
            <th>parent</th>
        </tr>
        @foreach($weeks as $week)
            <tr>
                <th>{{ $week }}</th>
                <th>{{ $loop->index }}</th>
                <th>{{ $loop->iteration }}</th>
                <th>{{ $loop->remaining }}</th>
                <th>{{ $loop->count }}</th>
                <th>{{ $loop->first }}</th>
                <th>{{ $loop->last }}</th>
                <th>{{ $loop->even }}</th>
                <th>{{ $loop->odd }}</th>
                <th>{{ $loop->depth }}</th>
                <th>{{ $loop->parent }}</th>
            </tr>
        @endforeach
    </table>

    <p>break文で再帰処理を中断する。</p>
    <table class="table">
        <tr>
            <th>値</th>
            <th>index</th>
            <th>iteration</th>
            <th>remaining</th>
            <th>count</th>
            <th>first</th>
            <th>last</th>
            <th>even</th>
            <th>odd</th>
            <th>depth</th>
            <th>parent</th>
        </tr>
        @foreach($weeks as $week)
            @break($loop->iteration > 3)
            <tr>
                <th>{{ $week }}</th>
                <th>{{ $loop->index }}</th>
                <th>{{ $loop->iteration }}</th>
                <th>{{ $loop->remaining }}</th>
                <th>{{ $loop->count }}</th>
                <th>{{ $loop->first }}</th>
                <th>{{ $loop->last }}</th>
                <th>{{ $loop->even }}</th>
                <th>{{ $loop->odd }}</th>
                <th>{{ $loop->depth }}</th>
                <th>{{ $loop->parent }}</th>
            </tr>
        @endforeach
    </table>
    <p>continue文で偶数回目の再帰を非表示に。</p>
    <table class="table">
        <tr>
            <th>値</th>
            <th>index</th>
            <th>iteration</th>
            <th>remaining</th>
            <th>count</th>
            <th>first</th>
            <th>last</th>
            <th>even</th>
            <th>odd</th>
            <th>depth</th>
            <th>parent</th>
        </tr>
        @foreach($weeks as $week)
            @continue($loop->odd)
            <tr>
                <th>{{ $week }}</th>
                <th>{{ $loop->index }}</th>
                <th>{{ $loop->iteration }}</th>
                <th>{{ $loop->remaining }}</th>
                <th>{{ $loop->count }}</th>
                <th>{{ $loop->first }}</th>
                <th>{{ $loop->last }}</th>
                <th>{{ $loop->even }}</th>
                <th>{{ $loop->odd }}</th>
                <th>{{ $loop->depth }}</th>
                <th>{{ $loop->parent }}</th>
            </tr>
        @endforeach
    </table>
</body>
</html>
