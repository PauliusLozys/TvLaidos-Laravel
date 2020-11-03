<?php

namespace App\Http\Controllers;

use App\Models\TvLaida;
use Illuminate\Http\Request;

class TvLaidaController extends Controller
{
    public function index() {
        $all_tv_laidos = TvLaida::all();
        return view('tvLaidos', compact('all_tv_laidos'));
    }
}
