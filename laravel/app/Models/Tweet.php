<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Tweet extends Model
{
    //不正なリクエストによってtweetsテーブルが予期せぬ内容に更新されることを防ぐように
    protected $fillable = [
        'tweet_name',
        'content',
    ];
    // use HasFactory;
    public function user(): BelongsTo
    {
        return $this->belongsTo('App\User');
    }
}
