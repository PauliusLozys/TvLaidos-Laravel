<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApieMusController extends Controller
{
    public function index() {
        return view('apieMus');
    }
}
