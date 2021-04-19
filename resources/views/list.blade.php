@extends('master')
@section('title', 'List of Books')
@section('content')
<h1>List of Books</h1>
<ul>
@foreach($list['title'] as $key => $title)
  <dt>{{ $title }}</dt>
  <dd>
    <ul>
      <li>Title: {{ $title }}</li>
      <li>ISBN: {{ $list['isbn'][$key] }}</li>
      <li>Category: {{ $list['category'][$key] }}</li>
      <li>No of pages: {{ $list['pages'][$key] }}</li>
    </ul>
  </dd>
@endforeach
</ul>
@endsection

