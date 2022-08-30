<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public function kirim()
    {

        $email = 'mohlutfifadilah23@gmail.com';
        $data = [
            'title' => 'Selamat datang!',
            'url' => 'https://aantamim.id',
        ];
        Mail::to($email)->send(new SendMail($data));
        dd('Berhasil mengirim email!');
    }
}
