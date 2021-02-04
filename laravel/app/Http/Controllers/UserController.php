<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(string $name)
    {
        //$nameと一致する名前を持つユーザーモデルで最初のユーザーモデル1件を取得。'name'はURLの{name}の部分のこと。
        $user = User::where('name', $name)->first();

        return view('users.show', [
            'user' => $user,
        ]);
    }
}
