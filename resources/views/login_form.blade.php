<!DOCTYPE html>
<html>

<head>
    <title>Login form</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="container">


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
        <h1> Login Form </h1>

        <form method="POST" action="{{ route('signin') }}">
            @csrf
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="password" required>
            <button type="submit">Login</button>
        </form>
        <p>
            Don't have an account?
            <a href="{{ route('registration') }}">Register</a>
        </p>
    </div>

</body>

</html>
