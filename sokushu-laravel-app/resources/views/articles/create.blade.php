<!-- resources/views/articles/create.blade.php -->

@extends('layouts.base') <!-- もしレイアウトを使用する場合 -->
@section('title', $appTitle.'物件登録フォーム')
@section('main')
    <h1>Create Article</h1>

    <form action="{{ route('articles.store') }}" method="POST">
        @csrf <!-- CSRFトークンを自動的に挿入 -->

        <!-- タイトル入力欄 -->
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" class="form-control" required>
            <label for="title">Address:</label>
            <input type="text" name="address" id="address" class="form-control" required>
        </div>

        <!-- コンテンツ入力欄 -->
        <div class="form-group">
            <label for="memo">Memo:</label>
            <textarea name="memo" id="memo" class="form-control" rows="5" required></textarea>
        </div>

        <!-- 送信ボタン -->
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
    <div style="margin-top: 20px;">
        <a href="{{ route('articles.index') }}" class="btn btn-primary">物件登録フォームへ</a>
    </div>
@endsection
