<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
        .register-container {
            background: #fff;
            padding: 40px 30px;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: left;
        }
        h1 {
            font-size: 26px;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 15px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
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
        .error {
            color: red;
            font-size: 14px;
            margin-bottom: 10px;
        }
        .redirect {
            margin-top: 20px;
            text-align: center;
            font-size: 14px;
            color: #555;
        }
        .redirect a {
            color: #805ef8;
            text-decoration: none;
        }
        .redirect a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h1>Register</h1>
        @if ($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" placeholder="Enter your username" required>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" placeholder="Create a password" required>

            <button type="submit">Register</button>
        </form>
        <div class="redirect">
            <p>Already have an account? <a href="{{ route('login') }}">Log in here</a></p>
        </div>
    </div>
</body>
</html>
