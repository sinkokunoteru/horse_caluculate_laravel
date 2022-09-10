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
        $credentials_id = array('user_id'=>$request->email,'password'=>$request->password);
        $credentials_email = $request->only('email', 'password');
        // user_idでの認証
        if (Auth::attempt($credentials_id)) {
            return redirect()->intended('home');
        // emailでの認証
        }if(Auth::attempt($credentials_email)){
            return redirect()->intended('home');
        //認証に失敗した
        }else{
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