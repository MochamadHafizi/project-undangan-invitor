<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;

use App\Mail\DemoMail;
use App\Models\Tamu;
use App\Models\Undangan;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index(Tamu $tamu)
    {
        $mailData = [
            'title' => 'Mail from Invitor',
            'body' => 'This is for testing email using smtp.'
        ];
         
        Mail::to($tamu->email_tamu)->send(new DemoMail($mailData));
           
        dd("Email is sent successfully.");
    }
}