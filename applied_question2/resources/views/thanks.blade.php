@extends('layouts.default')

@section('title', 'お問い合わせ完了ページ')

@section('content')
<p>お問い合わせありがとうございました。</p>

<a href="{{ route('/') }}">
  トップへ戻る
</a>

@endsection