@extends('layouts.base')
@section('title', $appTitle.'：サブビュー')
@section('main')
    @include('components.my-alert',[
        'type' => 'success',
        'alertTitle' => 'はじめてのコンポーネント',
        'slot' => 'コンポーネントは普通のビューと同じように.blade.phpファイルで定義できます！',
        'footer' => 'フッターテキスト'
    ])
@endsection
