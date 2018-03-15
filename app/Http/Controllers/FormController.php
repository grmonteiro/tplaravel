<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //

    public function show() {
        return view('form');
    }

    public function submit(Request $req) {

        $username = $req->input('name');

        if ($username != 'a' && !empty($username)) {
            return redirect('/profile/'.$username);
        } else {
            return redirect()
                ->back()
                ->withInput();
        }
    }
}
