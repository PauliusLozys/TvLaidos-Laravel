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
        $obj = Sezonas::findOrFail($id);
        $obj->delete();
        return Redirect()->route('sezonai');
    }
}
