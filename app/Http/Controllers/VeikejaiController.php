<?php

namespace App\Http\Controllers;

use App\Models\Veikejas;
use Illuminate\Http\Request;

class VeikejaiController extends Controller
{
    public function index() {
        $all_veikejai = Veikejas::all();
        return view('veikejai', compact('all_veikejai'));
    }
}
