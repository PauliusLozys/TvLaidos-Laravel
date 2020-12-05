<?php

namespace App\Http\Controllers;

use App\Models\Kurejas;
use Illuminate\Http\Request;

class KurejaiController extends Controller
{
    public function index() {
        $all_kurejai = Kurejas::all();
        return view('kurejai', compact('all_kurejai'));
    }
    public function create()
    {
        // return view('device.add');
    }

    public function store(Request $request)
    {

        // return view('device.add')->with('public_access_key', $public_access_key);
    }

    public function edit($id)
    {
        // return 'edit page';
    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {
        //
    }
}
