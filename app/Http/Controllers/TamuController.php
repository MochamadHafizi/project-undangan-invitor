<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Tamu;
use App\Models\Undangan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class TamuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        // $undangan = Undangan::latest()->get();
        $tamu = Tamu::all()->where('undangan_id', '=', $id);
        // dd($tamu);
        return view('user.tamu.index', compact('tamu', 'id'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $kategori = Kategori::latest()->get();
        $tamu = Tamu::latest()->get();
        $undangan = Undangan::latest()->get();
        return view('user.tamu.create', compact('tamu','undangan', 'id', 'kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $qr_code = Str::random(20);
        // dd($request);
        $request->validate([
            'undangan_id' => 'required',
            'kategori_id' => 'required',
            'nama_tamu' => 'required',
            'email_tamu' => 'required',
        ]);
         Tamu::create([
            'qr_code' => $qr_code,
            'undangan_id' => $request['undangan_id'],
            'kategori_id' => $request['kategori_id'],
            'nama_tamu' => $request['nama_tamu'],
            'email_tamu' => $request['email_tamu'],
        ]);
        return redirect()->route('data_tamu', $id)->with('success','Tamu Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Tamu $tamu)
    {

        // $tamu = Tamu::all()->where('undangan_id', '=', $id);

        $tamu = Undangan::join('tamus', 'tamus.undangan_id', '=', 'undangans.id')
                        ->join('kategoris', 'kategoris.id', '=', 'undangans.kategori_id')
                        ->join('susunan_acaras', 'susunan_acaras.undangan_id', '=', 'undangans.id')
                        ->get(['undangans.*', 'tamus.*', 'kategoris.*','susunan_acaras.*'])->where('undangan_id', '=', $id);
        if ($tamu->kategori_id == 1) {
            return view('user.undangan.pernikahan',compact('tamu'));
        }elseif ($tamu->kategori_id == 2) {
            return view('user.undangan.seminar',compact('tamu'));
        }
        elseif ($tamu->kategori_id == 3) {
            return view('user.undangan.musik',compact('tamu'));
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
    public function edit(Tamu $tamu, $id)
    {
        // return view('user.tamu.edit', compact('tamu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, Tamu $tamu, $id)
    // {
    //     $request->validate([
    //         'nama_tamu' => 'required',
    //         'undangan_id' => 'required',
    //         'email_tamu' => 'required'
    //     ]);
        
    //     $tamu->fill($request->post())->save();

    //     return redirect()->route('data_tamu', $id)->with('success','Tamu Has Been updated successfully');
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $id_tamu)
    {
        $tamu = Tamu::all()->where('id', '=', $id_tamu);
        $data =  $tamu->each->delete($tamu);
        // dd($data);
        return redirect()->route('data_tamu', $id);
    }
    
}
