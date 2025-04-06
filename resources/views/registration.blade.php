<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li> {{ $error }} </li>
            @endforeach
        </ul>
    @endif
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif


    <div class="container">
        <h1> Registration Form </h1>
        <form method="POST" action="{{ route('register_user') }}">
            @csrf
            <input type="text" name="user_name" placeholder="User name">
            <input type="email" name="email" placeholder="email">
            <input type="password" name="password" placeholder="password">
            <button type="submit">Register</button>
        </form>
        <p> Already have an account? <a href="{{ route('login') }}">Login</a></p>
    </div>
</body>

</html>
