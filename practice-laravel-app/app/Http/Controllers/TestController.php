<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class TestController extends Controller
{
    public function action_test()
    {
        // アクションの内容をここに書く
        return view('test');
    }
}
