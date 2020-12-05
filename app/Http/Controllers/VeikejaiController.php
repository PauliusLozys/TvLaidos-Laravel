<?php

namespace App\Http\Controllers;

use App\Models\Aktorius;
use App\Models\TvLaida;
use App\Models\Veikejas;
use Illuminate\Http\Request;

class VeikejaiController extends Controller
{
    public function index() {
        $all_veikejai = Veikejas::all();
        return view('veikejai', compact('all_veikejai'));
    }
    public function create()
    {
        $aktoriai = Aktorius::all();
        $tvLaidos = TvLaida::all();

        return view('create.veikejai', compact('aktoriai', 'tvLaidos'));
    }

    public function store(Request $request)
    {

        // dd($request);
        $data = $request->validate([
            'vardas' => 'required',
            'tvLaida' => 'required',
            'aktorius' => 'required'
        ]);

        $veikejas = new Veikejas();

        $veikejas->vardas = $data['vardas'];
        $veikejas->fk_tv_laida = $data['tvLaida'];
        $veikejas->fk_aktorius = $data['aktorius'];

        $veikejas->save();
        return Redirect()->route('veikejai');
    }

    public function edit($id)
    {
        $veikejas = Veikejas::findOrFail($id);
        $tvLaidos = TvLaida::all();
        $aktoriai = Aktorius::all();
        return view('edit.veikejai', compact('veikejas', 'aktoriai', 'tvLaidos'));
    }

    public function update(Request $request, $id)
    {
        // dd($request);
        $data = $request->validate([
            'vardas' => 'required',
            'tvLaida' => 'required',
            'aktorius' => 'required'
        ]);

        $veikejas = Veikejas::findOrFail($id);

        $veikejas->vardas = $data['vardas'];
        $veikejas->fk_tv_laida = $data['tvLaida'];
        $veikejas->fk_aktorius = $data['aktorius'];

        $veikejas->save();
        return Redirect()->route('veikejai');
    }

    public function destroy($id)
    {
        $obj = Veikejas::findOrFail($id);
        $obj->delete();
        return Redirect()->route('veikejai');
    }
}
