<?php

namespace App\Http\Controllers;

use App\Models\Sezonas;
use Illuminate\Http\Request;

class SezonaiController extends Controller
{
    public function index() {
        $all_sezonai = Sezonas::all();
        return view('sezonai', compact('all_sezonai'));
    }
}
