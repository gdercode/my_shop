<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function product_form()
    {
        return view('product.product_form');
    }

    public function register_product(Request $request)
    {
        $validated_product = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'stock_quantity' => 'required',
            'image' => 'nullable',
        ]);

        Product::create($validated_product);

        return redirect()->back()->with(
            'success',
            'Product created successfully!'
        );
    }
}
