<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function product_form()
    {
        return view('product.product_form');
    }
}
