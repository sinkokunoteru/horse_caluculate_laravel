<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //ホーム画面を表示する
    public function dispHome()
    {
        return view('home');
    }
}
