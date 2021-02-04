@extends('common/app')

@section('title', '投稿一覧')

@section('content')

@include('common/nav')

<div class="container mt-5">
  <aside class="col-3 d-none d-md-block position-fixed">
    <div class="card mb-4">
      <div class="btn blue-gradient text-center m-0 waves-effect waves-light">
        <p>spot_books</p>
      </div>
    </div>
    <div class="card mb-4">
      <div class="card-header">
        <i class="fas fa-tags mr-2">
          カテゴリ
        </i>
      </div>
      <div class="card-body">
        <p>#ファッション</p>
        <p>#スポーツ</p>
        <p>#言語</p>
        <p>#ファッション</p>
        <p>#ファッション</p>
        <p>#ファッション</p>
        <p>#ファッション</p>
        <p>#ファッション</p>
        <p>#ファッション</p>
        <p>#ファッション</p>
      </div>
    </div>
    <div class="card mb-4">

    </div>
  </aside>
  <main class="col-md-7 offset-md-5">
    @foreach($tweets as $tweet) 

    @include('tweets.card')

    @endforeach    
  </main>
</div>

@endsection