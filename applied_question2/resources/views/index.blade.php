@extends('layouts.default')

@section('title', 'トップページ')

@section('content')
<form action="/" method="post">
  @csrf
  <div>
    <label for="name">名前</label><br>
    <input type="text" name="name">
  </div>
  <div>
    <label for="email">メールアドレス</label><br>
    <input type="mail" id="email" name="email">
  </div>
  <input type="submit" value="送信する">
</form>

@endsection