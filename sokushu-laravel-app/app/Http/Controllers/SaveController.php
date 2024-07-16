<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Foundation\Validation\ValidatesRequests;

class SaveController extends Controller
{

    use ValidatesRequests;

    public function create() {
        return view('save.create');
    }

    public function store(Request $req) {
        $this->validate($req, Book::$rules);

        $book = new Book();

        $book->fill($req->except('_token'))->save();

        return redirect('save/list');
    }

    public function list() {
        return view('save.list', ['records' => Book::all()]);
    }

    public function edit($id) {
        return view('save.edit', ['book' => Book::findOrFail($id)]);
    }

    public function update(Request $req, $id) {
        $book = Book::findOrFail($id);

        $book->fill($req->except('_token', '_method'))->save();

        return redirect('save/list');
    }

    public function show($id) {
        return view('save.show', ['book' => Book::findOrFail($id)]);
    }

    public function destroy($id) {
        $book = Book::findOrFail($id);

        $book->delete();

        return redirect('save/list');
    }
}
