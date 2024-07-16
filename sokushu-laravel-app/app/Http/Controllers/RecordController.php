<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\DB;

class RecordController extends Controller
{
    public function find1() {
        return Book::find(1)->title;
    }

    public function findWithId($id = 1) {
        $book = Book::find($id);

        $result = $book !== null ? $book->title : 'Book not found.: Idは1~9までです。';

        return $result;
    }

    public function where() {
        $result = Book::where('publisher', 'インプレス')->get();

        return view('hello.list', ['records' => $result]);
    }

    public function first() {
        $result = Book::where('publisher', 'インプレス')->first();

        return view('record.first', ['records' => $result]);
    }

    public function whereValiation() {
        $result1 = Book::where('price', '<', 3000)->get();
        $result2 = Book::where('title', 'LIKE', '%Java%')->get();
        $result3 = Book::whereIn('publisher', ['日経BP', '技術評論社', '秀和システム'])->get();
        $result4 = Book::whereBetween('price', [2500, 3000])->get();
        $result5 = Book::whereNull('publisher')->get();
        $result6 = Book::whereYear('published', '2019')->get();
        $result7 = Book::whereYear('published', '<', '2019')->get();
        $result8 = Book::where('publisher', '翔泳社')->where('price', '<', '3000')->get();
        $result9 = Book::where('publisher', '翔泳社')->orWhere('price', '<', '2500')->get();
        $result10 = Book::whereRaw('publisher = ? AND price < ?', ['翔泳社', '3000'])->get();
        $result11 = Book::orderBy('price', 'desc')->get();
        $result12 = Book::orderBy('price', 'desc')->orderBy('published', 'desc')->get();
        $result13 = Book::inRandomOrder()->get();
        $result14 = Book::orderBy('published', 'desc')->offset(2)->limit(3)->get();
        $result15 = Book::select('title', 'publisher')->get();
        $result16 = Book::groupBy('publisher')->selectRaw('publisher, AVG(price) AS price_avg') ->get();
        $result17 = Book::groupBy('publisher')->having('price_avg', '<', 2500)->selectRaw('publisher, AVG(price) AS price_avg') ->get();
        $result18 = Book::whereIn('publisher', ['日経BP', '技術評論社', '秀和システム'])->max('price');

        $results = [
            'records1' => $result1,
            'records2' => $result2,
            'records3' => $result3,
            'records4' => $result4,
            'records5' => $result5,
            'records6' => $result6,
            'records7' => $result7,
            'records8' => $result8,
            'records9' => $result9,
            'records10' => $result10,
            'records11' => $result11,
            'records12' => $result12,
            'records13' => $result13,
            'records14' => $result14,
            'records15' => $result15,
            'records16' => $result16,
            'records17' => $result17,
            'records18' => $result18,
        ];

        return view('record.where', $results);
    }

    public function scope() {
        $result1 = Book::pricelessthan3000()->get();
        $result2 = Book::pricelessthan(2500)->get();

        $results = [
            'records1' => $result1,
            'records2' => $result2,
        ];

        return view('record.scope', $results);
    }

    public function listUsingSql() {
        $data = [
            'records' => DB::select('SELECT * From books')
        ];

        return view('hello.list', $data);
    }

    public function dump() {
        $result = Book::groupBy('publisher')->having('price_avg', '<', 2500)->selectRaw('publisher, AVG(price) AS price_avg')->dump()->get();

        return $result;

    }

    public function dd() {
        $result = Book::groupBy('publisher')->having('price_avg', '<', 2500)->selectRaw('publisher, AVG(price) AS price_avg')->dd()->get();

        return $result;

    }

    public function hasmany() {
        return view('record.hasmany', ['book' => Book::find(1)]);
    }

    public function reviews(int $id = 1) {
        return view('record.hasmany', ['book' => Book::find($id)]);
    }
 }
