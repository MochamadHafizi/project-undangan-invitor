<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScanController extends Controller
{
    public function scan(){
        return view('user.scan.scan');
    }
    public function validasiQrcode(Request $request)
    {
        
    }
}
