<?php
session_start();
include "config.php";

$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // ইমেইল ভ্যালিডেশন
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format!";
    } elseif (strlen($password) < 6) {
        $error = "Password must be at least 6 characters!";
    } else {
        // ইমেইল আগে থেকেই আছে কিনা চেক
        $check = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
        if (mysqli_num_rows($check) > 0) {
            $error = "Email already exists!";
        } else {
            $hashed = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashed')";
            if (mysqli_query($conn, $sql)) {
                $_SESSION['success'] = "Registration successful! Please login.";
                header("Location: login.php");
                exit();
            } else {
                $error = "Something went wrong!";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Signup</h2>
    <?php if($error) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="POST">
        <input type="text" name="name" placeholder="Full Name" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit">Register</button>
    </form>
    <p>Already have an account? <a href="login.php">Login</a></p>
</body>
</html>
