<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function welcome()
    {
        return view('form');
    }
    public function register(Request $request)
    {
        $fname = $request->get('fname');
        $lname = $request->get('lname');
        return view('welcome', ['fname' => $fname], ['lname' => $lname]);
    }
}