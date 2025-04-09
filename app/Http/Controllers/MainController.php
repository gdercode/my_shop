<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

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

    public function signin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->route('home_page');
        } else {
            return redirect()->back()->with(
                'success',
                'Invalid Login'
            );
        }
    }

    public function logout_page()
    {
        Auth::logout();
        return redirect()->route('login');
    }




    public function home_page()
    {

        $products = Product::all();
        return view('home_page', ['products' => $products]);
    }



}
