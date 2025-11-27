<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function ceo()
    {
        return view('ceo');
    }

    public function md()
    {
        return view('md');
    }
}
