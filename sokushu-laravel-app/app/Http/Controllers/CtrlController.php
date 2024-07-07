<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\RouteController;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use App\Http\Middleware\ControllerLogMiddleware;

class CtrlController extends Controller implements HasMiddleware
{

    public static function middleware():array {
        return [
            // 'auth',
            new Middleware(ControllerLogMiddleware::class, except: ['plain']),
            // new Middleware(ControllerLogMiddleware::class, ['except' => ['plain']]),
        ];
    }

    public function plain() {
        return response('Hello world!', 200)
            ->header('Content-Type', 'text/plain');
    }

    public function header() {
        return response()
            ->view('ctrl.header', ['msg' => 'Hello world!'], 200)
            ->header('Content-Type', 'text/xml');
    }

    public function headers() {
        return response()
            ->view('ctrl.header', ['msg' => 'Hello world!'], 200)
            ->withHeaders([
                'Content-Type' => 'text/xml',
                'X-Powered-FW' => 'Laravel/11',
            ]);
    }

    public function outJson() {
        return response()
            ->json([
                'name' => 'Taro Yamad',
                'sex' => 'male',
                'age' => 18,
            ]);
    }

    public function outJsonAsAssoc() {
        return [
                'name' => 'Taro Yamad',
                'sex' => 'male',
                'age' => 18,
        ];
    }

    public function outFile() {
        return response()
            ->download(
                base_path('data/data.txt'),
                'download.txt',
                ['content-type' => 'text/csv']
            );
    }

    public function outCsv() {
        return response()
            ->streamDownload(
                function() {
                    print(
                        "1,2022/10/1,123\n" .
                        "2,2022/10/2,116\n" .
                        "3,2022/10/3,98\n" .
                        "4,2022/10/4,102\n" .
                        "5,2022/10/5,134\n"
                    );
                }, 'download.csv', ['content-type' => 'text/csv']);

    }

    public function outImage() {
        return response()
            ->file(
                base_path('data/test_image.png'),
                ['content-type' => 'image/png']
            );
    }

    public function redirectBasic() {
        return redirect('hello/list');
    }

    public function redirectRoute() {
        return redirect()->route('list');
    }

    public function redirectParam() {
        return redirect()->route('param', ['id' => 1]);
    }

    public function redirectActionParam() {
        return redirect()->action([RouteController::class, 'param'], ['id' => '1']);
    }

    public function redirectAway() {
        return redirect()->away('https://www.google.com/');
    }

    public function index(Request $request) {
        $requestObjects = [
            'path' => request()->path(),
            'header' =>request()->header('Host'),
            'hasHeader' =>request()->hasHeader('Host'),
            'server' =>request()->server('SERVER_NAME'),
            'root' =>$request->root(),
            'url' =>$request->url(),
            'fullUrl' =>$request->fullUrl(),
            'ip' =>$request->ip(),
            'userAgent' =>$request->userAgent(),
        ];

        $formattedString = '';
        foreach ($requestObjects as $key => $value) {
            $formattedString .= "{$key}：{$value}\n";
         }

         return nl2br($formattedString);
    }

    public function hoge(Request $request, $id = 1) {
        return nl2br('リクエストパス：' . request()->path()."\n id値：" . $id);
    }

    public function form() {
        return view('ctrl.form', ['result' => '']);
    }

    public function result(Request $request) {
        $name = $request->input('name');
        return view('ctrl.form', ['result' => 'Hello, '.$name.'!']);
    }

    public function upload() {
        return view('ctrl.upload', ['result' => '']);
    }

    public function uploadfile(Request $request) {
        if (!$request->hasFile('upfile')) {
            return redirect()->back()->with('errorMsg', 'ファイルを選択してください。');
        }

        $file = $request->upfile;

        if (!$file->isValid()) {
            return 'アップロードに失敗しました。';
        }

        $name = $file->getClientOriginalName();

        $file->storeAs('files', $name);
        return view('ctrl.upload', [
            'result' => $name.'アップロードしました。'
        ]);
    }

    public function middle() {
        return 'log is recorded!';
    }

    public function overEighteen() {
        return 'I am over 18.';
    }

    public function showVerificationForm()
    {
        return view('ctrl.verify_age');
    }

    public function checkAge(Request $request)
    {
        // 入力された年齢を取得
        $ageConfirmation = $request->input('age_confirmation');

        // 年齢のチェックロジック（例として、18歳以上かどうかを確認）
        if ($ageConfirmation === 'yes') {
            // 年齢が18歳以上の場合、セッションに年齢確認フラグをセット
            $request->session()->put('age_verified', true);
            return redirect('ctrl/18+'); // プロファイルページにリダイレクト
        } else {
            // 年齢が18歳未満の場合、ホームページにリダイレクト
            return 'このページは閲覧できません！';
        }
    }
}
