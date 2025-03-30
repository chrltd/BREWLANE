<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BrewLane - Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f1e5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            position: relative;
        }
        .header {
            position: absolute;
            top: 20px;
            left: 20px;
            display: flex;
            align-items: center;
        }
        .header img {
            width: 50px;
            height: auto;
            margin-right: 10px;
        }
        .header h1 {
            font-size: 24px;
            color: #854836;
            margin: 0;
        }
        .nav-buttons {
            position: absolute;
            top: 20px;
            right: 20px;
        }
        .nav-buttons a {
            text-decoration: none;
            color: white;
            background-color: #854836;
            padding: 8px 15px;
            border-radius: 15px;
            margin: 0 5px;
            font-size: 14px;
        }
        .nav-buttons a:hover {
            background-color: #6d3c28;
        }
        .container {
            background: #F6F0F0;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 350px;
        }
        .btn {
            background-color: #854836;
            color: white;
            padding: 12px;
            width: 100%;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }
        .btn:hover {
            background-color:#6d3c28;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="LOGO.png" alt="BrewLane Logo">
        <h1>Brewlane Cafe</h1>
    </div>
    <div class="nav-buttons">
        <a href="index.php">Home</a>
        <a href="menu.php">Menu</a>  <!-- Added Menu Button -->
        <a href="login.php">Login</a>
        <a href="signup.php">Sign Up</a>
    </div>
    <div class="container">
        <button class="btn" onclick="location.href='menu.php'">New Order</button>
        <button class="btn" onclick="location.href='addmenu.php'">Add Menu</button> <!-- Added Add Menu Button -->
    </div>
</body>
</html>
