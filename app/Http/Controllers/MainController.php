<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function login_function()
    {
        return view('login_form');
    }

    public function registration_form()
    {
        return view('registration');
    }


    public function store_user(Request $request)
    {
        dd('MWARAMUTSE');

        return response('dsaffadsf');
    }



}
