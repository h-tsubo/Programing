@extends('layouts.base')
@section('title', 'リレーションの基本')
@section('main')
<h2>pricelessthan3000スコープを使用</h2>
<table class="table">
    <tr>
        <th>タイトル</th>
        <th>出版社</th>
        <th>価格</th>
        <th>出版日</th>
    </tr>
    @foreach ($records1 as $record)
        <tr>
            <td>{{ $record->title }}</td>
            <td>{{ $record->publisher }}</td>
            <td>{{ $record->price }}円</td>
            <td>{{ $record->published }}</td>
        </tr>
    @endforeach
</table>
<h2>pricelessthan(2500)スコープを使用</h2>
<table class="table">
    <tr>
        <th>タイトル</th>
        <th>出版社</th>
        <th>価格</th>
        <th>出版日</th>
    </tr>
    @foreach ($records2 as $record)
        <tr>
            <td>{{ $record->title }}</td>
            <td>{{ $record->publisher }}</td>
            <td>{{ $record->price }}円</td>
            <td>{{ $record->published }}</td>
        </tr>
    @endforeach
</table>
@endsection
