@extends('layouts.base')
@section('title', $appTitle.'：コンポーネントの使用')
@section('main')
    <x-my-alert type="success" :alert-title="$title" >
        コンポーネントは普通のビューと同じように.blade.phpファイルの定義できます。
        <x-slot:footer>
            フッターテキスト
        </x-slot:footer>
    </x-my-alert>
@endsection
