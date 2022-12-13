<?php

namespace App\Http\Controllers;

use App\Mail\MyTestMail;
use App\Models\Kategori;
use App\Models\Tamu;
use App\Models\Undangan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UndanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $undangan = Undangan::latest()->get();
        return view('user.undangan.index', compact('undangan'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_pemilik = User::all();
        $data_kategori = Kategori::all();
        return view('user.undangan.create', compact('data_pemilik','data_kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'kategori_id' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
            'waktu' => 'required',
            'jam' => 'required',
            'tempat' => 'required',
            'susunan_acara' => 'required',
        ]);
        Undangan::create($request->all());
        // dd($request);
        return redirect()->route('undangan.index')->with('success','Undangan Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Undangan $undangan)
    {
        if ($undangan->kategori_id == 1) {
            return view('user.undangan.pernikahan',compact('undangan'));
        }elseif ($undangan->kategori_id == 2) {
            return view('user.undangan.seminar',compact('undangan'));
        }
        elseif ($undangan->kategori_id == 3) {
            return view('user.undangan.musik',compact('undangan'));
        }
        else {
            return view('user.undangan.index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Undangan $undangan)
    {
         $data_pemilik = User::all();
        $data_kategori = Kategori::all();
        return view('user.undangan.edit', compact('data_pemilik','data_kategori','undangan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Undangan $undangan)
    {
        $request->validate([
            'user_id' => 'required',
            'kategori_id' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
            'waktu' => 'required',
            'jam' => 'required',
            'tempat' => 'required',
            'susunan_acara' => 'required',
        ]);
        
        $undangan->fill($request->post())->save();

        return redirect()->route('undangan.index')->with('success','Undangan Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Undangan $undangan)
    {
        $undangan->delete();
        return redirect()->route('undangan.index');
    }

    // public function admin(){
    //     $undangan = Undangan::latest()->get();
    //     return view('admin.undangan.index', compact('undangan'))->with('i', (request()->input('page', 1) - 1) * 5);
    // }

}
