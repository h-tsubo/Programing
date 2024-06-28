@extends('layouts.base')
@section('title', $appTitle.'：動的コンポーネント')
@section('main')
    <x-dynamic-component
        :component="$comp"
        type="success"
        :alert-title="$title"
    >
        コンポーネントは普通のビューと同じように.blade.phpファイルの定義できます。
        <x-slot:footer>
            フッターテキスト
        </x-slot:footer>
    </x-my-alert>
@endsection
