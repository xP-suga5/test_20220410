@extends('layouts.default')

@section('title', 'list')

@section('content')
<table border="1">
  <tr>
    <th>id</th>
    <th>name</th>
    <th>mail</th>
  </tr>
  @foreach ($items as $item)
  <tr>
    <td>
      {{$item->id}}
    </td>
    <td>
      {{$item->name}}
    </td>
    <td>
      {{$item->email}}
    </td>
  </tr>
  @endforeach
</table>

@endsection