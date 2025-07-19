<?php
session_start();
include "config.php";

$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    $user = mysqli_fetch_assoc($query);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user'] = $user['name'];
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid email or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Login</h2>
    <?php
        if(isset($_SESSION['success'])) {
            echo "<p style='color:green;'>".$_SESSION['success']."</p>";
            unset($_SESSION['success']);
        }
        if($error) echo "<p style='color:red;'>$error</p>";
    ?>
    <form method="POST">
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit">Login</button>
    </form>
    <p>Don't have an account? <a href="register.php">Register</a></p>
</body>
</html>
