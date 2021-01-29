<?php

namespace App\Http\Controllers;

use App\Models\Tweet;

use Illuminate\Http\Request;

use App\Http\Requests\TweetRequest;

class TweetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tweets = Tweet::all()->sortByDesc('created_at');
        return view('tweets.index', ['tweets' => $tweets]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tweets.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    //$requestはTweetRequestクラスのインスタンス。$tweetはTweetクラスのインスタンス。
    public function store(TweetRequest $request, Tweet $tweet)
    {
        //DI(メソッドの内部で他のクラスのインスタンスを生成するのではなく、外で生成されたクラスのインスタンスをメソッドの引数として受け取る流れ)により$tweet = new Tweet(); と記載しなくて良くなる。
        //fillableプロパティ内に指定しておいたプロパティ(ここではtweet_nameとbody)のみが、$tweetの各プロパティに代入
        $tweet->fill($request->all());
        $tweet->user_id = $request->user()->id;
        $tweet->save();
        return redirect()->route('tweets.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
