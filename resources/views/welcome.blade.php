<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <style>
        body {
            background: #e3e3e3;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .welcome-container {
            background: #00ccff;
            border: 4px solid #000;
            padding: 20px;
            width: 400px;
            text-align: center;
        }
        button {
            background: #000;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <h1>Selamat Datang, {{ $username }}!</h1>
        <a href="/logout"><button>Logout</button></a>
    </div>
</body>
</html>
