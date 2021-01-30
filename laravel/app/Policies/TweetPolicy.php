<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Tweet;
use Illuminate\Auth\Access\HandlesAuthorization;

class TweetPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models tweets.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */

    //コントローラーのindexアクションメソッドに対応。?でnullであることも許容
    public function viewAny(?User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the models tweet.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Tweet  $modelsTweet
     * @return mixed
     */

    //コントローラーのshowアクションメソッドに対応
    public function view(?User $user, Tweet $tweet)
    {
        return true;
    }

    /**
     * Determine whether the user can create models tweets.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //作成前のためユーザーIDを比較するといったことはできないので一律trueとする。
        return true;
    }

    /**
     * Determine whether the user can update the models tweet.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Tweet  $modelsTweet
     * @return mixed
     */
    public function update(User $user, Tweet $tweet)
    {
        //ログイン中のユーザーのIDと記事モデルのユーザーIDが一致すればtrueを、不一致であればfalseを返すように設定。
        return $user->id === $tweet->user_id;
    }

    /**
     * Determine whether the user can delete the models tweet.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Tweet  $modelsTweet
     * @return mixed
     */
    public function delete(User $user, Tweet $tweet)
    {
        return $user->id === $tweet->user_id;
    }

    /**
     * Determine whether the user can restore the models tweet.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Tweet  $modelsTweet
     * @return mixed
     */
    public function restore(User $user, Tweet $tweet)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the models tweet.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Tweet  $modelsTweet
     * @return mixed
     */
    public function forceDelete(User $user, Tweet $tweet)
    {
        //
    }
}
