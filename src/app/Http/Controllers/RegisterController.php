<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Consts\Link;

class RegisterController extends Controller
{
    //新規登録画面を表示する
    public function dispRegister() 
    {
        return view('auth.register');
    }

    //登録確認画面を表示する
    public function checkRegister(RegisterRequest $request) 
    {
        $birth = date_create($request->birth);
        return view('auth.register_check',
        ['email'=>$request->email,
        'password'=>Hash::make($request->password),
        'user_name'=>$request->user_name,
        'user_id'=>$request->user_id,
        'birth'=>$request->birth,
        'gender'=>$request->gender,
        'birth_view'=>$birth,]);
    }

    //ユーザーモデルに登録処理をさせる
    public function createUser(Request $request)
    {
        User::create($request->all());
        return view('results.finish',['msg'=>__("msg.success.register"), 'link'=>Link::HOME, 'value'=>__("msg.value.home")]);
    }
}
