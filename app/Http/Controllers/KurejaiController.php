<?php

namespace App\Http\Controllers;

use App\Models\Kurejas;
use App\Models\Kuria;
use App\Models\TvLaida;
use Illuminate\Http\Request;

class KurejaiController extends Controller
{
    public function index() {
        $all_kurejai = Kurejas::all();
        return view('kurejai', compact('all_kurejai'));
    }
    public function create()
    {
        $tvLaidos = TvLaida::all();
        return view('create.kurejai', compact('tvLaidos'));
    }

    public function store(Request $request)
    {
        // dd($request);
        $data = $request->validate([
            'vardas' => 'required|max:255|alpha',
            'pavarde' => 'required|max:255|alpha',
            'role' => 'required|max:255',
            'lytis' => 'required'
        ]);

        $kurejas = new Kurejas();

        $kurejas->vardas = $data['vardas'];
        $kurejas->pavarde = $data['pavarde'];
        $kurejas->lytis = $data['lytis'];
        $kurejas->role = $data['role'];
        $kurejas->save();
        
        foreach($request->tvLaida as $id){
            $kuria = new Kuria();

            $kuria->fk_tv_laida = $id;
            $kuria->fk_kurejas = $kurejas->id;

            $kuria->save();
        }
       
        return Redirect()->route('kurejai');
    }

    public function edit($id)
    {
        $kurejas = Kurejas::findOrFail($id);
        $kuria = [];

        foreach($kurejas->tvLaidos as $tv) {
            $kuria[] = $tv->id;
        }

        $tvLaidos = TvLaida::all();

        return view('edit.kurejai', compact('kurejas', 'kuria', 'tvLaidos'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'role' => 'required',
            'vardas' => 'required|max:255|alpha',
            'pavarde' => 'required|max:255|alpha',
            'lytis' => 'required'
        ]);

        $kurejas = Kurejas::findOrFail($id);

        $kurejas->vardas = $data['vardas'];
        $kurejas->pavarde = $data['pavarde'];
        $kurejas->lytis = $data['lytis'];
        $kurejas->role = $data['role'];
        $kurejas->save();
        
        $toDestroy = Kuria::all()->where('fk_kurejas', $kurejas->id);
        foreach($toDestroy as $dest){
            $dest->delete();
        }
        if($request->tvLaida != null){
            foreach($request->tvLaida as $id){
            
                $kuria = new Kuria();
    
                $kuria->fk_tv_laida = $id;
                $kuria->fk_kurejas = $kurejas->id;
    
                $kuria->save();
            }
        }
    
        return Redirect()->route('kurejai');
    }

    public function destroy($id)
    {
        $obj = Kurejas::findOrFail($id);
        $obj->delete();
        return Redirect()->route('kurejai');
    }
}
