<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Consts\Link;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{

    public function dispLogin()
    {
        return view('auth.login');
    }

    /**
     * 認証を処理する
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        exit(var_dump($credentials));

        if (Auth::attempt($credentials)) {
            // 認証に成功した
            return redirect()->intended('home');
        }else{
            //認証に失敗した
            return view('results.finish',['msg'=>__("msg.error.different"), 'link'=>Link::LOGIN, 'value'=>__("msg.value.home")]);
        }
        
    }
}