@extends('layouts.base')
@section('title', '様々なデータの取得方法')
@section('main')
<h2>大小比較(price < 3000)</h2>
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
<h2>部分一致検索(...Java...)</h2>
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
<h2>範囲検索('日経BP', '技術評論社', '秀和システム')</h2>
<table class="table">
<tr>
    <th>タイトル</th>
    <th>出版社</th>
    <th>価格</th>
    <th>出版日</th>
</tr>
@foreach ($records3 as $record)
  <tr>
    <td>{{ $record->title }}</td>
    <td>{{ $record->publisher }}</td>
    <td>{{ $record->price }}円</td>
    <td>{{ $record->published }}</td>
  </tr>
@endforeach
</table>
<h2>範囲検索(2500円〜3000円)</h2>
<table class="table">
<tr>
    <th>タイトル</th>
    <th>出版社</th>
    <th>価格</th>
    <th>出版日</th>
</tr>
@foreach ($records4 as $record)
  <tr>
    <td>{{ $record->title }}</td>
    <td>{{ $record->publisher }}</td>
    <td>{{ $record->price }}円</td>
    <td>{{ $record->published }}</td>
  </tr>
@endforeach
</table>
<h2>出版社がnullであるもの</h2>
<table class="table">
<tr>
    <th>タイトル</th>
    <th>出版社</th>
    <th>価格</th>
    <th>出版日</th>
</tr>
@foreach ($records5 as $record)
  <tr>
    <td>{{ $record->title }}</td>
    <td>{{ $record->publisher }}</td>
    <td>{{ $record->price }}円</td>
    <td>{{ $record->published }}</td>
  </tr>
@endforeach
</table>
<h2>出版日の日付検索(=2019)</h2>
<table class="table">
<tr>
    <th>タイトル</th>
    <th>出版社</th>
    <th>価格</th>
    <th>出版日</th>
</tr>
@foreach ($records6 as $record)
  <tr>
    <td>{{ $record->title }}</td>
    <td>{{ $record->publisher }}</td>
    <td>{{ $record->price }}円</td>
    <td>{{ $record->published }}</td>
  </tr>
@endforeach
</table>
<h2>出版日の日付検索(<2019)</h2>
<table class="table">
<tr>
    <th>タイトル</th>
    <th>出版社</th>
    <th>価格</th>
    <th>出版日</th>
</tr>
@foreach ($records7 as $record)
  <tr>
    <td>{{ $record->title }}</td>
    <td>{{ $record->publisher }}</td>
    <td>{{ $record->price }}円</td>
    <td>{{ $record->published }}</td>
  </tr>
@endforeach
</table>
<h2>複数検索(出版社=翔泳社 and price<3000)</h2>
<table class="table">
<tr>
    <th>タイトル</th>
    <th>出版社</th>
    <th>価格</th>
    <th>出版日</th>
</tr>
@foreach ($records8 as $record)
  <tr>
    <td>{{ $record->title }}</td>
    <td>{{ $record->publisher }}</td>
    <td>{{ $record->price }}円</td>
    <td>{{ $record->published }}</td>
  </tr>
@endforeach
</table>
<h2>複数検索(出版社=翔泳社 or price<2500)</h2>
<table class="table">
<tr>
    <th>タイトル</th>
    <th>出版社</th>
    <th>価格</th>
    <th>出版日</th>
</tr>
@foreach ($records9 as $record)
  <tr>
    <td>{{ $record->title }}</td>
    <td>{{ $record->publisher }}</td>
    <td>{{ $record->price }}円</td>
    <td>{{ $record->published }}</td>
  </tr>
@endforeach
</table>
<h2>複数検索(出版社=翔泳社 and price<3000)</h2>
<table class="table">
<tr>
    <th>タイトル</th>
    <th>出版社</th>
    <th>価格</th>
    <th>出版日</th>
</tr>
@foreach ($records10 as $record)
  <tr>
    <td>{{ $record->title }}</td>
    <td>{{ $record->publisher }}</td>
    <td>{{ $record->price }}円</td>
    <td>{{ $record->published }}</td>
  </tr>
@endforeach
</table>
<h2>ソート(価格(降順))</h2>
<table class="table">
<tr>
    <th>タイトル</th>
    <th>出版社</th>
    <th>価格</th>
    <th>出版日</th>
</tr>
@foreach ($records11 as $record)
  <tr>
    <td>{{ $record->title }}</td>
    <td>{{ $record->publisher }}</td>
    <td>{{ $record->price }}円</td>
    <td>{{ $record->published }}</td>
  </tr>
@endforeach
</table>
<h2>ソート(価格(降順)/出版日(dsc))</h2>
<table class="table">
<tr>
    <th>タイトル</th>
    <th>出版社</th>
    <th>価格</th>
    <th>出版日</th>
</tr>
@foreach ($records12 as $record)
  <tr>
    <td>{{ $record->title }}</td>
    <td>{{ $record->publisher }}</td>
    <td>{{ $record->price }}円</td>
    <td>{{ $record->published }}</td>
  </tr>
@endforeach
</table>
<h2>ランダム順</h2>
<table class="table">
<tr>
    <th>タイトル</th>
    <th>出版社</th>
    <th>価格</th>
    <th>出版日</th>
</tr>
@foreach ($records13 as $record)
  <tr>
    <td>{{ $record->title }}</td>
    <td>{{ $record->publisher }}</td>
    <td>{{ $record->price }}円</td>
    <td>{{ $record->published }}</td>
  </tr>
@endforeach
</table>
<h2>ランダム順</h2>
<table class="table">
<tr>
    <th>タイトル</th>
    <th>出版社</th>
    <th>価格</th>
    <th>出版日</th>
</tr>
@foreach ($records13 as $record)
  <tr>
    <td>{{ $record->title }}</td>
    <td>{{ $record->publisher }}</td>
    <td>{{ $record->price }}円</td>
    <td>{{ $record->published }}</td>
  </tr>
@endforeach
</table>
<h2>ソート(出版日(dsc)の3~5件目)</h2>
<table class="table">
<tr>
    <th>タイトル</th>
    <th>出版社</th>
    <th>価格</th>
    <th>出版日</th>
</tr>
@foreach ($records14 as $record)
  <tr>
    <td>{{ $record->title }}</td>
    <td>{{ $record->publisher }}</td>
    <td>{{ $record->price }}円</td>
    <td>{{ $record->published }}</td>
  </tr>
@endforeach
</table>
<h2>タイトルと出版社のみを取得</h2>
<table class="table">
<tr>
    <th>タイトル</th>
    <th>出版社</th>
    <th>価格</th>
    <th>出版日</th>
</tr>
@foreach ($records15 as $record)
  <tr>
    <td>{{ $record->title }}</td>
    <td>{{ $record->publisher }}</td>
    <td>{{ $record->price }}円</td>
    <td>{{ $record->published }}</td>
  </tr>
@endforeach
</table>
<h2>出版社と平均価格</h2>
<table class="table">
<tr>
    <th>出版社</th>
    <th>価格</th>
</tr>
@foreach ($records16 as $record)
  <tr>
    <td>{{ $record->publisher }}</td>
    <td>{{ $record->price_avg }}円</td>
  </tr>
@endforeach
</table>
<h2>出版社と平均価格（< 2500）</h2>
<table class="table">
<tr>
    <th>出版社</th>
    <th>価格</th>
</tr>
@foreach ($records17 as $record)
  <tr>
    <td>{{ $record->publisher }}</td>
    <td>{{ $record->price_avg }}円</td>
  </tr>
@endforeach
</table>
<h2>範囲検索('日経BP', '技術評論社', '秀和システム')の最大価格</h2>
<table class="table">
<tr>
    <th>価格</th>
</tr>
<tr>
    <td>{{ $records18 }}</td>
</tr>
</table>
@endsection
