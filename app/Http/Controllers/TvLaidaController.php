<?php

namespace App\Http\Controllers;

use App\Models\Kurejas;
use App\Models\Kuria;
use App\Models\TvLaida;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TvLaidaController extends Controller
{
    public function index() {
        $all_tv_laidos = TvLaida::all();
        return view('tvLaidos', compact('all_tv_laidos'));
    }
    public function create()
    {
        $kurejai = Kurejas::all();
        return view('create.tvLaidos', compact('kurejai'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'pavadinimas' => 'required|max:255',
            'aprasymas' => 'required|max:255',
            'trukme' => 'required|numeric|min:1',
            'ivertinimas' => 'required|numeric|between:1,10',
            'kurejai' => Rule::requiredIf($request->kurejai == null)
        ]);

        $tvLaida = new TvLaida();

        $tvLaida->pavadinimas = $data['pavadinimas'];
        $tvLaida->aprasymas = $data['aprasymas'];
        $tvLaida->trukme = $data['trukme'];
        $tvLaida->ziurovu_ivertinimas = $data['ivertinimas'];
        $tvLaida->save();
        
        
        foreach($request->kurejai as $id){
            $kuria = new Kuria();

            $kuria->fk_tv_laida = $tvLaida->id;
            $kuria->fk_kurejas = $id;

            $kuria->save();
        }
       
        return Redirect()->route('tvLaidos');
    }

    public function edit($id)
    {
        $tvLaida = TvLaida::findOrFail($id);
        $kuria = [];

        foreach($tvLaida->kurejai as $kurejas) {
            $kuria[] = $kurejas->id;
        }

        $kurejai = Kurejas::all();

        return view('edit.tvLaidos', compact('tvLaida', 'kuria', 'kurejai'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'pavadinimas' => 'required|max:255',
            'aprasymas' => 'required|max:255',
            'trukme' => 'required|numeric',
            'ivertinimas' => 'required|numeric',
            'kurejai' => Rule::requiredIf($request->kurejai == null)
        ]);

        $tvLaida = TvLaida::findOrFail($id);

        $tvLaida->pavadinimas = $data['pavadinimas'];
        $tvLaida->aprasymas = $data['aprasymas'];
        $tvLaida->trukme = $data['trukme'];
        $tvLaida->ziurovu_ivertinimas = $data['ivertinimas'];
        $tvLaida->save();
        
        

        $toDestroy = Kuria::all()->where('fk_tv_laida', $tvLaida->id);
        foreach($toDestroy as $dest){
            $dest->delete();
        }
        foreach($request->kurejai as $id){
            $kuria = new Kuria();

            $kuria->fk_tv_laida = $tvLaida->id;
            $kuria->fk_kurejas = $id;

            $kuria->save();
        }
       
        return Redirect()->route('tvLaidos');
    }

    public function destroy($id)
    {
        $obj = TvLaida::findOrFail($id);
        $obj->delete();
        return Redirect()->route('tvLaidos');
    }
}
