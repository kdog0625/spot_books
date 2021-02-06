<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    //RegistersUsersトレイト(トレイト内で定義している機能が使えるようになる。)
    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    //redirectToというプロパティにRouteServiceProviderクラスのHOMEという定数が代入
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'own_id' => ['required', 'string', 'min:1', 'max:16', 'unique:users','regex:/^@[a-zA-Z0-9]+$/'],
            'name' => ['required', 'string', 'min:1', 'max:16'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            //alpha_numで英数字かチェック。
            'password' => ['required', 'string', 'alpha_num', 'min:8', 'confirmed'],
            'profile_image' => ['file','mimes:jpeg,png,jpg,bmb','max:2048'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'own_id' => $data['own_id'],
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
