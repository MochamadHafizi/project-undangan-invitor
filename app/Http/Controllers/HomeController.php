<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('user.index');
    }
    public function handleAdmin()
    {
        $users = DB::table('users')->count();
        $invite = DB::table('undangans')->count();
        $kategori = DB::table('kategoris')->count();
        return view('admin.index', compact('users','invite','kategori'));
    }
}
