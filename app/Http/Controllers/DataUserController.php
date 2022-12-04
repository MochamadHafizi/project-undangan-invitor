<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DataUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataUser = User::latest()->get();
        return view('admin.dataUser.index', compact('dataUser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dataUser.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, )
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'is_admin' => 'required',
            'password' => 'required'
        ]);
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'is_admin' => $request['is_admin'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->route('dataUser.index')->with('success','User has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $dataUser)
    {
        return view('admin.dataUser.edit',compact('dataUser'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $dataUser)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'is_admin' => 'required',
            'password' => 'required'
        ]);
        $dataUser->fill([
            'name' => $request['name'],
            'email' => $request['email'],
            'is_admin' => $request['is_admin'],
            'password' => Hash::make($request['password']),
        ])->save();
        return redirect()->route('dataUser.index')->with('success','dataUser has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $dataUser)
    {
        $dataUser->delete();
        return redirect()->route('dataUser.index')->with('success','Data User deleted');
    }
}
