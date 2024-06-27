<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function escape() {
        $listData = [
            'msg' => '<ul>
                <li>escape1</li>
                <li>escape2</li>
                <li>escape3</li>
            </ul>'
        ];

        return view('view.escape', $listData);
    }

    public function comment() {
        return view('view.comment');
    }
}
