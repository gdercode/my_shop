<!DOCTYPE html>
<html>

<head>
    <title>Login form</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="container">
        <h1> Login Form </h1>

        <form method="POST" action="">
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
