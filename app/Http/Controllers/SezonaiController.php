<?php

namespace App\Http\Controllers;

use App\Models\Sezonas;
use App\Models\TvLaida;
use Illuminate\Http\Request;

class SezonaiController extends Controller
{
    public function index() {
        $all_sezonai = Sezonas::all();
        return view('sezonai', compact('all_sezonai'));
    }
    public function create()
    {
        $tvLaidos = TvLaida::all();
        return view('create.sezonai', compact('tvLaidos'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'sezonoNr' => 'required|numeric|min:1',
            'sezonoIvertis' => 'required|between:1,10|numeric',
            'epizoduNr' => 'required|numeric|min:1',
            'tvLaida' => 'required'
        ]);

        $sezonas = new Sezonas();

        $sezonas->sezono_nr = $data['sezonoNr'];
        $sezonas->sezono_ivertinimas = $data['sezonoIvertis'];
        $sezonas->epizodu_sk = $data['epizoduNr'];
        $sezonas->fk_tv_laida = $data['tvLaida'];

        $sezonas->save();
        return Redirect()->route('sezonai');
    }

    public function edit($id)
    {
        $sezonas = Sezonas::findOrFail($id);
        $tvLaidos = TvLaida::all();
        return view('edit.sezonai', compact('sezonas', 'tvLaidos'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'sezonoNr' => 'required|numeric',
            'sezonoIvertis' => 'required|between:1,10|numeric',
            'epizoduNr' => 'required|numeric',
            'tvLaida' => 'required'
        ]);

        $sezonas = Sezonas::findOrFail($id);

        $sezonas->sezono_nr = $data['sezonoNr'];
        $sezonas->sezono_ivertinimas = $data['sezonoIvertis'];
        $sezonas->epizodu_sk = $data['epizoduNr'];
        $sezonas->fk_tv_laida = $data['tvLaida'];

        $sezonas->save();
        return Redirect()->route('sezonai');
    }

    public function destroy($id)
    {
        $obj = Sezonas::findOrFail($id);
        $obj->delete();
        return Redirect()->route('sezonai');
    }
}
