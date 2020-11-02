<?php

namespace App\Http\Controllers;

use App\Models\Sezonas;
use App\Models\TvLaida;
use Illuminate\Http\Request;

class SezonaiController extends Controller
{
    public function getSezonai() {
        $all_sezonai = Sezonas::all();
        return view('sezonai', compact('all_sezonai'));
    }
}
