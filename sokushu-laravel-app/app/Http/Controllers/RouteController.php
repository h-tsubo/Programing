<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function param(int $id = 1) {
        return 'id値：'.$id;
    }

    public function date(int $year, int $month, int $day) {
        return 'urlの日付は、'.$year.'年'.$month.'月'.$day.'日';
    }

    public function search(string $keywd = '') {
        if ($keywd == '') {
            return 'キーワードを入れてください！';
        } else {
            return $keywd;
        }
    }

    public function enum_param(Category $category = Category::Language) {
        return $category->value;
    }
}

enum Category: string {
    case Language = 'lang';
    case Framework = 'fw';
    case Tools = 'tools';
}
