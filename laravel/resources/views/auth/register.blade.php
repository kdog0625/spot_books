@extends('common/app')

@section('title', 'ユーザー登録')

@section('content')
@include('common/nav')
<div class="container">
<div class="row">
      <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
        <div class="card mt-login-up">
          <div class="card-body text-center">
            <h2 class="h3 card-title text-center mt-2">ユーザー登録</h2>
            @include('common/error_card_list')
            <div class="card-text">
              <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="md-form">
                  <label for="own_id">ユーザーID</label>
                  <!-- old関数を使うことで、入力した内容が保持された状態でユーザー登録画面を表示 -->
                  <input class="form-control" type="text" id="own_id" name="own_id" required value="{{ old('own_id') }}">
                  <small>@+半角英数字の16文字以内で入力して下さい。</small>
                </div>
                <div class="md-form">
                  <label for="name">ユーザー名</label>
                  <!-- old関数を使うことで、入力した内容が保持された状態でユーザー登録画面を表示 -->
                  <input class="form-control" type="text" id="name" name="name" required value="{{ old('name') }}">
                  <small>16文字以内で入力して下さい。</small>
                </div>
                <div class="md-form">
                  <label for="email">メールアドレス</label>
                  <input class="form-control" type="text" id="email" name="email" required value="{{ old('email') }}" >
                </div>
                <div class="md-form">
                  <label for="password">パスワード</label>
                  <input class="form-control" type="password" id="password" name="password" required>
                  <small>パスワードは半角英数字の8文字以内で入力して下さい。</small>
                </div>
                <div class="md-form">
                  <label for="password_confirmation">パスワード(確認)</label>
                  <input class="form-control" type="password" id="password_confirmation" name="password_confirmation" required>
                </div>
                <button class="btn btn-block blue-gradient mt-2 mb-2" type="submit">ユーザー登録</button>
              </form>
              <div class="mt-0">
                <a href="{{ route('login') }}" class="card-text">ログインはこちら</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  
</div>
@endsection