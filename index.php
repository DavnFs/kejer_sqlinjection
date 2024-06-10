<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
        }
        .hero {
            height: 100vh;
            background: url('path/to/your/image.jpg') no-repeat center center/cover;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            position: relative;
        }
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
        }
        .hero-content {
            position: relative;
            z-index: 1;
        }
        .hero h1 {
            font-size: 4rem;
            margin: 0;
        }
        .hero p {
            font-size: 1.5rem;
            margin: 1rem 0;
        }
        .hero a {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            margin-top: 1rem;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            font-size: 1.2rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .hero a:hover {
            background-color: #0056b3;
        }
        .hero-buttons {
            margin-top: 2rem;
        }
        .hero-buttons a {
            margin: 0 1rem;
        }
        .main-content {
            padding: 2rem;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="hero">
    <div class="hero-content">
        <h1>Selamat Datang di Tiketin</h1>
        <p>Pesan tiket acara favoritmu dengan mudah dan cepat.</p>
        <div class="hero-buttons">
            <a href="register.php">Daftar Sekarang</a>
            <a href="login.php">Login</a>
        </div>
    </div>
</div>
<div class="main-content">
    <h2>About Us</h2>
    <p>Welcome to Tiketin, your number one source for all events. We're dedicated to providing you the best tickets with a focus on dependability, customer service, and uniqueness.</p>
    <p>Founded in 2024 by a team of passionate event-goers, Tiketin has come a long way from its beginnings. When we first started out, our passion for making events accessible to everyone drove us to start our own business.</p>
    <p>We hope you enjoy our services as much as we enjoy offering them to you. If you have any questions or comments, please don't hesitate to contact us.</p>
</div>
</body>
</html>
