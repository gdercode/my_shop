<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-Commerce</title>
    <link rel="stylesheet" href="{{ asset('css/main_layout.css') }}">
</head>

<body>

    <nav class="navbar">
        <div class="container">
            <a class="brand" href="{{ route('home_page') }}">E-Commerce</a>
            <ul class="menu">
                <li><a href="">Home</a></li>
                <li><a href="{{ route('product_form') }}">New Product</a></li>
                <li><a href="{{ route('logout') }}">logout</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        @auth
            <b class="success"> {{ auth()->user()->name }} </b>
        @endauth
        @if ($errors->any())
            <div class="error">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session('success'))
            <p class="success">{{ session('success') }}</p>
        @endif
        @yield('content')
    </div>

</body>

</html>
