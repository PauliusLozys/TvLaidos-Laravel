<?php

namespace App\Http\Controllers;

use App\Models\Kurejas;
use Illuminate\Http\Request;

class KurejaiController extends Controller
{
    public function getKurejai() {
        $all_kurejai = Kurejas::all();
        return view('kurejai', compact('all_kurejai'));
    }
}
