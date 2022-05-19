<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class emailController extends Controller
{
    public function index()
    {
        Mail::to("idadrusdiana01@gmail.com")->send(new TestMail());

        return "Email telah dikirim";
    }
}
