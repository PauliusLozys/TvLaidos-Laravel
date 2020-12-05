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
        $obj = TvLaida::findOrFail($id);
        $obj->delete();
        return Redirect()->route('tvLaidos');
    }
}
