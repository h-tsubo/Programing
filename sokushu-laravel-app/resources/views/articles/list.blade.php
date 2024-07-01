@extends('layouts.base')
@section('title', $appTitle.'物件登録フォーム')
@section('main')
<div>
    <h1>物件一覧</h1>
    <ul>
        @foreach($articles as $article)
            <li>
                <a href="{{ route('articles.show', ['article' => $article->id]) }}">
                    {{ $article->title }}
                </a>
                ：{{ $article->address }}
            </li>
        @endforeach
    </ul>

    <div style="margin-top: 20px;">
        <a href="{{ route('articles.create') }}" class="btn btn-primary">物件登録フォームへ</a>
    </div>
</div>
@endsection
