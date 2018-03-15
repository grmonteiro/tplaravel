<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestraintController extends Controller
{
    public function redirectUser() {
        return redirect()->route('home');
    }
}
