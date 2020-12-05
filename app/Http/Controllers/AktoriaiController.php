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
        return view('create.aktoriai');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'vardas' => 'required|max:255|alpha',
            'pavarde' => 'required|max:255|alpha',
            'lytis' => 'required'
        ]);

        $aktorius = new Aktorius();

        $aktorius->vardas = $data['vardas'];
        $aktorius->pavarde = $data['pavarde'];
        $aktorius->lytis = $data['lytis'];

        $aktorius->save();
        return Redirect()->route('aktoriai');
    }

    public function edit($id)
    {
        $aktorius = Aktorius::findOrFail($id);
        return view('edit.aktoriai')->with('aktorius', $aktorius);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'vardas' => 'required|max:255|alpha',
            'pavarde' => 'required|max:255|alpha',
            'lytis' => 'required'
        ]);
        $aktorius = Aktorius::findOrFail($id);
        $aktorius->vardas = $data['vardas'];
        $aktorius->pavarde = $data['pavarde'];
        $aktorius->lytis = $data['lytis'];

        $aktorius->save();
        return Redirect()->route('aktoriai');
    }

    public function destroy($data)
    {
        $obj = Aktorius::findOrFail($data);
        $obj->delete();
        return Redirect()->route('aktoriai');
    }
}
