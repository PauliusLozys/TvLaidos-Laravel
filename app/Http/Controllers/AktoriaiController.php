<?php

namespace App\Http\Controllers;

use App\Models\Aktorius;
use Illuminate\Http\Request;

class AktoriaiController extends Controller
{
    public function index() {
        $all_aktoriai = Aktorius::paginate(5);
        return view('aktoriai', compact('all_aktoriai'));
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
        $aktorius = Aktorius::findOrFail($id);
        return view('edit.aktoriai')->with('aktorius', $aktorius);
    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($data)
    {
        $obj = Aktorius::findOrFail($data);
        $obj->delete();
        return Redirect()->route('aktoriai');
    }
}
