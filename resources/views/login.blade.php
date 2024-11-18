<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            background: #e3e3e3;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background: #ffcc00;
            border: 4px solid #000;
            padding: 20px;
            width: 300px;
            text-align: center;
        }
        input {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 2px solid #000;
        }
        button {
            background: #000;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }
        .error {
            color: red;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        @if($errors->any())
            <div class="error">{{ $errors->first() }}</div>
        @endif
        <form method="POST" action="/login">
            @csrf
            <input type="text" name="username" placeholder="Username" value="{{ old('username') }}">
            <input type="password" name="password" id="password" placeholder="Password">
            <div>
                <input type="checkbox" onclick="togglePassword()"> Lihat Password
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
    <script>
        function togglePassword() {
            const password = document.getElementById('password');
            password.type = password.type === 'password' ? 'text' : 'password';
        }
    </script>
</body>
</html>
