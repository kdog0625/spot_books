@extends('common/app')

@section('title', '編集')

@section('content')

@include('common/nav')

<div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card mt-3">
          <div class="card-body pt-0">
            @include('common/error_card_list')
            <div class="card-text">
              <form method="POST" action="{{ route('tweets.update', ['tweet' => $tweet]) }}">
                @method('PATCH')
                @include('tweets.form')
                <button type="submit" class="btn blue-gradient btn-block">更新する</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
@endsection