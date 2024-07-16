@extends('layouts.base')
@section('title', 'リレーションの基本')
@section('main')
<table class="table">
<tr>
    <th>出版社</th>
    <th>価格</th>
</tr>
<tr>
    <td>{{ $records->title }}</td>
    <td>{{ $records->publisher }}</td>
    <td>{{ $records->price }}円</td>
</tr>
</table>
@endsection
