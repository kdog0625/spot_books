@extends('common/app')
@section('title', '投稿一覧')
@section('content')
@include('common/nav')
<div class="container">
  @foreach($tweets as $tweet) 
  {{ $tweet->content}}
  @endforeach
</div>
@endsection