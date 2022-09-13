<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    //マイページを表示する
    public function dispMypage()
    {
        return view('users.mypage');
    }

    //アカウント情報ページを表示する
    public function dispAccount()
    {
        $user = $this->getUserInfo();
        $birth = $this->birthFormatChange();
        return view('users.account', compact('user', 'birth'));
    }

    //アカウント情報編集ページを表示する
    public function dispAccountEdit()
    {
        return view('users.accountEdit');
    }

    //アカウント情報ページに表示するユーザー情報の取得
    public function getUserInfo()
    {
        //sessionのidを使用してusersテーブルからユーザー情報を取得
        $user = User::find(Auth::user()->id)->first();
        //性別を表示用の日本語に変換
        if($user->gender === 0) {
            $user->gender = "男性";
        }else{
            $user->gender = "女性";
        }
        return $user ;
    }

    //生年月日のフォーマットをY月ｍ日で表示するための変換
    public function birthFormatChange()
    {
        $user =$this->getUserInfo();
        $birth = date_create($user->birth);
        return $birth;
    }
}