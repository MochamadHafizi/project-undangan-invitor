<?php

namespace App\Http\Controllers;

use App\Models\SusunanAcara;
use App\Models\Undangan;
use Illuminate\Http\Request;

class AcaraController extends Controller
{
     public function index($id)
    {
        // $undangan = Undangan::latest()->get();
        $acara = SusunanAcara::all()->where('undangan_id', '=', $id);
        // dd($tamu);
        return view('user.acara.index', compact('acara', 'id'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

     public function create($id)
    {
        $acara = SusunanAcara::latest()->get();
        $undangan = Undangan::latest()->get();
        return view('user.acara.create', compact('acara','undangan', 'id'));
    }

    public function store(Request $request, $id)
    {
        $request->validate([
            'undangan_id' => 'required',
            'nama_acara' => 'required',
            'jam' => 'required',
        ]);
         SusunanAcara::create([
            'undangan_id' => $request['undangan_id'],
            'nama_acara' => $request['nama_acara'],
            'jam' => $request['jam'],
        ]);
        return redirect()->route('data_acara', $id)->with('success','Acara Berhasil Ditambahkan');
    }

    public function destroy($id, $id_acara)
    {
        $acara = SusunanAcara::all()->where('id', '=', $id_acara);
        $data =  $acara->each->delete($acara);
        // dd($data);
        return redirect()->route('data_acara', $id);
    }
}
