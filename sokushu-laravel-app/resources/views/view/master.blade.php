@extends('layouts.base')
@section('title', $appTitle.'：共通レイアウト')
@section('main')
    @parent
    <p>{{ $msg }}</p>
@endsection
