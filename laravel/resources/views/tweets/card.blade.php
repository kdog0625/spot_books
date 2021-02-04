<div class="card mt-3">
  <div class="card-body d-flex flex-row">
    <a href="{{ route('users.show', ['name' => $tweet->user->name]) }}" class="text-dark">
      <i class="fas fa-user-circle fa-3x mr-1"></i>
    </a> 
      <div>
        <div class="font-weight-bold">
          <a href="{{ route('users.show', ['name' => $tweet->user->name]) }}" class="text-dark">
          <!-- //-- Userモデルのインスタンスのnameプロパティの値が返る -->
          {{ $tweet->user->name }}
          </a>
        </div>
        <div class="font-weight-lighter">
          {{ $tweet->created_at->format('Y/m/d H:i') }}
        </div>
      </div>

      @if( Auth::id() === $tweet->user_id )
        <div class="ml-auto card-text">
          <div class="dropdown">
            <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <button type="button" class="btn btn-link text-muted m-0 p-2">
                <i class="fas fa-ellipsis-v"></i>
              </button>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="{{ route('tweets.edit', ['tweet' => $tweet]) }}">
                <i class="fas fa-pen mr-1"></i>記事を更新する
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item text-danger" data-toggle="modal" data-target="#modal-delete-{{ $tweet->id }}">
                <i class="fas fa-trash-alt mr-1"></i>記事を削除する
              </a>
            </div>
          </div>
        </div>
          
        <div id="modal-delete-{{ $tweet->id }}" class="modal fade" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form method="POST" action="{{ route('tweets.destroy', ['tweet' => $tweet]) }}">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                  {{ $tweet->tweet_name }}を削除します。よろしいですか？
                </div>
                <div class="modal-footer justify-content-between">
                  <a class="btn btn-outline-grey" data-dismiss="modal">キャンセル</a>
                  <button type="submit" class="btn btn-danger">削除する</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      @endif
  </div>
  <div class="card-body pt-0">
    <h3 class="h4 card-title">
      <a class="text-dark" href="{{ route('tweets.show', ['tweet' => $tweet]) }}">
        {{ $tweet->tweet_name }}
      </a>
    </h3>
    <div class="card-text">
      {{ $tweet->content }}
    </div>
  </div>
</div>