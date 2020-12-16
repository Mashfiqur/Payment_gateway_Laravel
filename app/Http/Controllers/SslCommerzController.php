<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SslCommerzController extends Controller
{
    public function index(){
    	return view('welcome');
    }
    public function exampleEasyCheckout()
    {
        return view('exampleEasycheckout');
    }

    public function exampleHostedCheckout()
    {
        return view('exampleHosted');
    }
}
