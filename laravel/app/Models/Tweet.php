<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//Eloquentでデータベースとモデルを関連付ける機能を付与
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Tweet extends Model
{
    //不正なリクエストによってtweetsテーブルが予期せぬ内容に更新されることを防ぐように
    protected $fillable = [
        'tweet_name',
        'content',
    ];
    // userメソッドの戻り値が、BelongsToクラスであることを宣言
    public function user(): BelongsTo
    {
        //$thisでTweetクラス自身のインスタンスを使用。多対1の関係
        return $this->belongsTo('App\Models\User');
    }
}
