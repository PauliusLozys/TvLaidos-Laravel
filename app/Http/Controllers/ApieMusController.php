<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApieMusController extends Controller
{
    
    public function index() {
        if(session('time', -1) == '-1'){ // Set a new connection time
            session(['time' => time()]);
        }
        return view('apieMus');
    }
}
