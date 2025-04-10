@extends('layouts.main_layout')
@section('content')
    <h1>Home page</h1>

    <div class="product-grid">
        @foreach ($products as $one_product)
            <div class="product-card">
                <img src="{{ asset('product_images/' . $one_product->image_path) }}" alt="{{ $one_product->name }}">

                <h2>{{ $one_product->name }}</h2>

                <p>Price : $ {{ $one_product->price }}</p>
                <p>Stock Quantity : {{ $one_product->stock_quantity }}</p>
                <p><a href="{{ route('delete_product', $one_product->id) }}">Delete</a></p>
                <p>
                <form method="post" action="{{ route('sell_product', $one_product->id) }}">
                    @csrf
                    <input type="text" name="sold_quantity" placeholder="Sold quantity">
                    <button type="submit">Sell</button>
                </form>
                </p>

            </div>
        @endforeach
    </div>
@endsection
