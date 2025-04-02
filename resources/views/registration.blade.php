<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="container">
        <h1> Registration Form </h1>
        <form method="POST" action="">
            <input type="text" name="user_name" placeholder="User name" required>
            <input type="email" name="email" placeholder="email" required>
            <input type="password" name="password" placeholder="password" required>
            <button type="submit">Register</button>
        </form>
        <p> Already have an account? <a href="{{ route('login') }}">Login</a></p>
    </div>
</body>

</html>
