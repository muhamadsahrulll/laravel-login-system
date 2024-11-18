<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom, #fdf4e3, #ffefe8, #e5dbf7);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }
        .login-container {
            background: #fff;
            padding: 40px 50px;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 360px;
            text-align: left;
        }
        h2 {
            margin-bottom: 20px;
            font-size: 26px;
            font-weight: bold;
        }
        .login-container p {
            margin-bottom: 10px;
            font-size: 14px;
            color: #555;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 15px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
        }
        input[type="checkbox"] {
            margin-right: 5px;
        }
        button {
            width: 100%;
            background: #805ef8;
            color: #fff;
            font-size: 16px;
            padding: 15px;
            margin-top: 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }
        button:hover {
            background: #6a49cc;
        }
        .alternative {
            text-align: center;
            margin: 20px 0;
            color: #777;
        }
        .qr-login {
            display: flex;
            justify-content: center;
            align-items: center;
            border: 1px dashed #aaa;
            border-radius: 8px;
            padding: 10px;
            cursor: pointer;
            color: #555;
        }
        .qr-login:hover {
            background: #f7f7f7;
        }
        .error {
            color: red;
            font-size: 14px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Sign in</h2>
        <p>Enter your account details or use QR code</p>
        @if($errors->any())
            <div class="error">{{ $errors->first() }}</div>
        @endif
        <form method="POST" action="/login">
            @csrf
            <input type="text" name="username" placeholder="Enter Username" value="{{ old('username') }}">
            <input type="password" name="password" id="password" placeholder="Enter your password">
            <div>
                <input type="checkbox" onclick="togglePassword()"> Show Password
            </div>
            <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 10px;">
                <a href="#" style="font-size: 14px; color: #805ef8;">Recover password</a>
            </div>
            <button type="submit">Sign in</button>
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
