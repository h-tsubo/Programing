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

    public function if() {
        return view('view.if', ['random' => random_int(0,100)]);
    }

    public function unless() {
        return view('view.unless', ['random' => random_int(0,100)]);
    }

    public function isset_empty() {
        $data = [
            'msg' => 'メッセージが表示されます。',
            'empty_msg' => ''
        ];

        return view('view.isset_empty', $data);
    }

    public function switch() {
        return view('view.switch', ['random' => random_int(0,5)]);
    }

    public function while() {
        return view('view.while');
    }

    public function for() {
        return view('view.for');
    }

    public function foreach_assoc() {
        $assocData = [
            'member1' => [
                'name' => 'YAMADA, Yoshiro',
                'sex' => 'male',
                'birth' => '1923-11-10',
            ],
            'member2' => [
                'name' => 'SUZUKI, Hanako',
                'sex' => 'female',
                'birth' => '1945-4-10',
            ]
        ];

        return view('view.foreach_assoc', $assocData);
    }

    public function foreach_loop() {
        $weekData = [
            'weeks' => ['月', '火', '水', '木', '金', '土', '日']
        ];

        return view('view.foreach_loop', $weekData);
    }

    public function forelse() {
        return view('view.forelse', ['records' => []]);
    }

    public function style_class() {
        $data = [
            'isEnabled' => true
        ];

        return view('view.style_class', $data);
    }

    public function checked() {
        $data = [
            'isEnabled' => true
        ];

        return view('view.checked', $data);
    }

}



