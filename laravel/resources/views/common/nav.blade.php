<nav class="navbar navbar-expand navbar-dark sunny_bg">

<div class="container d-flex justify-content-center px-4">
  <a class="navbar-brand nav-link font-weight-bold bg-guest title-p_auto" href="/"><i class="far fa-images mr-1"></i>spot_books</a>

  <ul class="navbar-nav ml-auto">

    @guest 
    <li class="nav-item user_interval">
      <a class="nav-link" href="{{ route('register') }}"><i class="fas fa-user-plus mr-1"></i>ユーザー登録</a>
    </li>
    @endguest

    @guest 
    <li class="nav-item user_interval">
      <a class="nav-link" href="{{ route('login') }}"><i class="fas fa-sign-in-alt mr-1"></i>ログイン</a>
    </li>
    @endguest

    @guest 
    <li class="nav-item user_interval">
      <a class="nav-link bg-guest" href="{{ route('login.guest') }}"><i class="fas fa-user-check mr-1"></i>ゲストログイン</a>
    </li>
    @endguest

    @auth
    <li class="nav-item">
      <a class="nav-link" href="{{ route('tweets.create') }}"><i class="fas fa-pen mr-1"></i>投稿する</a>
    </li>
    @endauth
    
    @auth
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle bg-guest" id="navbarDropdownMenuLink" data-toggle="dropdown"
         aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i>{{ Auth::user()->name }}さんログイン中
      </a>
      <div class="dropdown-menu dropdown-menu-right dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
        <button class="dropdown-item" type="button"
                onclick="location.href=''">
          マイページ
        </button>
        <div class="dropdown-divider"></div>
        <button form="logout-button" class="dropdown-item" type="submit">
          ログアウト
        </button>
      </div>
    </li>
    <form id="logout-button" method="POST" action="{{ route('logout') }}">
    @csrf 
    </form>
    @endauth 
  </ul>
</div>
</nav>