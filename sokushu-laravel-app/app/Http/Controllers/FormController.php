<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showForm() {
        return view('form.form');
    }

    public function postForm(Request $request) {
        $name = $request->input('name');
        $email = $request->input('email');

        return "Name: $name, Email: $email";
    }
}
