<?php
// Menyertakan file konfigurasi
global $mysqli;
include 'includes/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $mysqli->real_escape_string($_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $phone = $mysqli->real_escape_string($_POST['phone']);
    $nim = $mysqli->real_escape_string($_POST['nim']);

    $sql = "INSERT INTO users (username, password, phone, nim) VALUES ('$username', '$password', '$phone', '$nim')";

    if ($mysqli->query($sql) === TRUE) {
        echo "Registrasi berhasil. Silakan <a href='login.php'>login</a>.";
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .register-container {
            background-color: #fff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h2 {
            margin-bottom: 1.5rem;
            color: #333;
        }
        input[type="text"],
        input[type="password"],
        input[type="tel"],
        input[type="number"] {
            width: 100%;
            padding: 0.75rem;
            margin: 0.5rem 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            padding: 0.75rem;
            margin: 1rem 0;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: white;
            font-size: 1rem;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .login-link {
            display: block;
            margin-top: 1rem;
            color: #007bff;
            text-decoration: none;
        }
        .login-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="register-container">
    <h2>Register</h2>
    <form method="POST" action="register.php">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="tel" name="phone" placeholder="Phone" required><br>
        <input type="number" name="nim" placeholder="NIM" required><br>
        <input type="submit" value="Register">
    </form>
    <a href="login.php" class="login-link">Sudah punya akun? Login di sini</a>
</div>
</body>
</html>
