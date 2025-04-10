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
            'image_path' => 'nullable',
        ]);

        if ($request->hasFile('image_path')) {
            $imageName = $request->file('image_path')->getClientOriginalName();
            $request->file('image_path')->move(
                public_path('product_images'),
                $imageName
            );
            $validated_product['image_path'] = $imageName;
        }


        Product::create($validated_product);

        return redirect()->back()->with(
            'success',
            'Product created successfully!'
        );
    }

    public function delete_product($id)
    {
        $product = Product::where('id', $id)->first();
        $product->delete();
        return redirect()->route('home_page')->with(
            'success',
            'Product Deleted!'
        );
    }


    public function sell_product(Request $request, $id)
    {
        $product = Product::where('id', $id)->first();
        $new_quantity = $request->input('sold_quantity');

        $product->stock_quantity = $product->stock_quantity - $new_quantity;
        $product->save();

        return redirect()->back()->with('success', "Thank You For coming!");

    }
}
