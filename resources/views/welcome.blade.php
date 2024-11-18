<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sadako</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f8fa;
        }
        /* Navbar styling */
        .navbar {
            background-color: #ffffff;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .navbar h1 {
            font-size: 24px;
            font-weight: bold;
            color: #4a4a4a;
            margin: 0;
        }
        .navbar ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 20px;
        }
        .navbar ul li {
            display: inline;
        }
        .navbar ul li a {
            text-decoration: none;
            color: #4a4a4a;
            font-size: 16px;
            transition: color 0.3s;
        }
        .navbar ul li a:hover {
            color: #007bff;
        }
        .navbar .logout-btn {
            background-color: #007bff;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        .navbar .logout-btn:hover {
            background-color: #0056b3;
        }
        /* Welcome Section */
        .welcome-section {
            text-align: center;
            margin: 60px auto 20px auto;
            padding: 20px;
            max-width: 600px;
        }
        .welcome-section h2 {
            font-size: 36px;
            font-weight: bold;
            margin: 20px 0;
        }
        .welcome-section p {
            font-size: 18px;
            color: #6c757d;
            margin-bottom: 20px;
        }
        .welcome-section .action-btn {
            background-color: #007bff;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        .welcome-section .action-btn:hover {
            background-color: #0056b3;
        }
        /* Circle images */
        .profile-images {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin: 20px 0;
        }
        .profile-images img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <h1>Sadako</h1>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">About Us</a></li>
        </ul>
        <a href="/logout" class="logout-btn">Logout</a>
    </div>

    <!-- Welcome Section -->
    <div class="welcome-section">
        <h2>Welcome, {{ $username }}!</h2>
        <p>Discover new opportunities, connect with others, and explore exciting content.</p>
        
        <a href="#" class="action-btn">Apply Now</a>
    </div>
</body>
</html>
