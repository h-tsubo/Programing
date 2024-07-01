@extends('layouts.base')
@section('title', $appTitle.'物件ページ')
@section('main')
<div>
    <h1>{{ $article->title }}</h1>
    <p><strong>Address:</strong> {{ $article->address }}</p>
    <p><strong>Memo:</strong>{{ $article->memo }}</p>
</div>
<div style="margin-top: 20px;">
        <form action="{{ route('articles.destroy', ['article' => $article->id]) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">削除</button>
        </form>
        <a href="{{ route('articles.index') }}" class="btn btn-primary">物件登録フォームへ</a>
</div>
@endsection
