<?php

namespace L37sg0\Rockstar\Http\Controllers;

use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index() {
        return view('rockstar::frontend.index');
    }
}
