@csrf
<div class="md-form">
  <label>タイトル</label>
  <input type="text" name="tweet_name" class="form-control" required value="{{ $tweet->tweet_name ?? old('tweet_name') }}">
</div>
<div class="form-group">
  <label></label>
  <textarea name="content" required class="form-control" rows="16" placeholder="本文">{{ $tweet->tweet_name ?? old('content') }}</textarea>
</div>