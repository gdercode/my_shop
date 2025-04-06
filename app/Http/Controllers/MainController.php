<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; 

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
        $request->validate([
            'user_name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        User::create([
            'name' => $request->user_name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->back()->with(
            'success',
            'Acount Created!'
        );

    }



}
