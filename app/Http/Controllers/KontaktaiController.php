<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontaktaiController extends Controller
{
    public function index() {
        return view('kontaktai');
    }
}
