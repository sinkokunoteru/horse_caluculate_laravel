<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Consts\Link;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{


    //ログイン画面を表示する
    public function dispLogin()
    {
        return view('auth.login');
    }


    //ログイン認証
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // 認証に成功した
            return redirect()->intended('home');
        }else{
            //認証に失敗した
            return view('results.finish',['msg'=>__("msg.error.different"), 'link'=>Link::LOGIN, 'value'=>__("msg.value.home")]);
        }
        
    }


    //ログアウト処理
    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }
}