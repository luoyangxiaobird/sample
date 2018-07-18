<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    //定义三个动作处理三个页面请求
    public function home(){
        return view('static_pages.home');
    }
    public function help(){
        return view('static_pages.help');
    }
    public function about(){
        return view('static_pages.about');
    }
}
