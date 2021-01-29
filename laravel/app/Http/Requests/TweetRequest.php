<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TweetRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    //authorizeメソッドでリクエストの対象となるリソース(ここでは記事)をユーザーが更新して良いかどうかを判定。trueで返せるようにする。
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

     //rulesメソッドでは、バリデーションのルールを定義
    public function rules()
    {
        return [
            'tweet_name' => 'required|max:50',
            'content' => 'required|max:500',
        ];
    }

    //バリデーションエラーメッセージに表示される項目名をカスタマイズ
    public function attributes()
    {
        return [
            'tweet_name' => 'タイトル',
            'content' => '本文',
        ];
    }
}
