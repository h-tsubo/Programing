<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NameSpaceController extends Controller
{
    public function ns() {
        return '名前空間付きコントローラーをルーティング';
    }
}
