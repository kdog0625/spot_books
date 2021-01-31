<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Tweet;
use Illuminate\Auth\Access\HandlesAuthorization;

class TweetPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any tweets.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    //?を付けて引数がnullでも許容。
    public function viewAny(?User $user)
    {
        //
        return true; 
    }

    /**
     * Determine whether the user can view the tweet.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Tweet  $tweet
     * @return mixed
     */
    public function view(?User $user, Tweet $tweet)
    {
        //
        return true; 
    }

    /**
     * Determine whether the user can create tweets.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //まだ未作成のため、ユーザーIDを比較することはないためtrueで返す。
        return true; 
    }

    /**
     * Determine whether the user can update the tweet.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Tweet  $tweet
     * @return mixed
     */
    public function update(User $user, Tweet $tweet)
    {
        //ログイン中のユーザーのIDと記事モデルのユーザーIDが一致すればtrueを、不一致であればfalseを返す
        return $user->id === $tweet->user_id;
    }

    /**
     * Determine whether the user can delete the tweet.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Tweet  $tweet
     * @return mixed
     */
    public function delete(User $user, Tweet $tweet)
    {
        //
        return $user->id === $tweet->user_id;
    }

    /**
     * Determine whether the user can restore the tweet.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Tweet  $tweet
     * @return mixed
     */
    public function restore(User $user, Tweet $tweet)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the tweet.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Tweet  $tweet
     * @return mixed
     */
    public function forceDelete(User $user, Tweet $tweet)
    {
        //
    }
}
