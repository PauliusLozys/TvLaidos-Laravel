<?php

namespace App\Http\Controllers;

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
        $obj = Veikejas::findOrFail($id);
        $obj->delete();
        return Redirect()->route('veikejai');
    }
}
