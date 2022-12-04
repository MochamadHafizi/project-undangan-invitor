<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Tamu;
use App\Models\Undangan;
use App\Models\User;
use Illuminate\Http\Request;

class InviteController extends Controller
{
    public function index(){
       $undangan = Undangan::join('users', 'users.id', '=', 'undangans.user_id')
              		->join('tamus', 'tamus.id', '=', 'undangans.tamu_id')
                    ->join('kategoris', 'kategoris.id', '=', 'undangans.kategori_id')
              		->get(['undangans.*', 'users.*', 'tamus.*', 'kategoris.*']);

       return view('user.undangan.index', compact('undangan'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $data_pemilik = User::all();
        $data_tamu = Tamu::all();
        $data_kategori = Kategori::all();
        return view('user.undangan.create', compact('data_pemilik', 'data_tamu','data_kategori'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'tamu_id' => 'required',
            'kategori_id' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
            'waktu' => 'required',
            'tempat' => 'required',
            'susunan_acara' => 'required',
        ]);
         Undangan::create($request->all());
        return redirect()->route('undangan.index')->with('success','Tamu has been created successfully.');
    }

     public function edit(Undangan $undangan)
    {
        $data_pemilik = User::all();
        $data_tamu = Tamu::all();
        $data_kategori = Kategori::all();
        return view('user.undangan.edit', compact('data_pemilik', 'data_tamu','data_kategori','undangan'));
    }

    public function update(Request $request, Undangan $undangan)
    {
        $request->validate([
            'user_id' => 'required',
            'tamu_id' => 'required',
            'kategori_id' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
            'waktu' => 'required',
            'tempat' => 'required',
            'susunan_acara' => 'required',
        ]);
        
        $undangan->fill($request->post())->save();

        return redirect()->route('undangan.index')->with('success','undangan Has Been updated successfully');
    }

     public function show(Undangan $undangan)
    {
        
        $data_pemilik = User::all();
        $data_tamu = Tamu::all();
        $data_kategori = Kategori::all();

        if ($undangan->kategori_id == 1) {
            return view('user.undangan.pernikahan',compact('data_pemilik', 'data_tamu','data_kategori','undangan'));
        }elseif ($undangan->kategori_id == 2) {
            return view('user.undangan.ultah',compact('data_pemilik', 'data_tamu','data_kategori','undangan'));
        }
        elseif ($undangan->kategori_id == 3) {
            return view('user.undangan.reuni',compact('data_pemilik', 'data_tamu','data_kategori','undangan'));
        }
        else {
            return view('user.undangan.index');
        }
        // dd($undangan);
    }
    public function destroy(Undangan $undangan)
    {
         $undangan->delete();
        return redirect()->route('undangan.index')->with('success','undangan has been deleted successfully');
    }
}