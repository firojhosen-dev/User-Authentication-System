<?php
$host = "localhost";
$user = "root";  // XAMPP হলে ডিফল্ট root
$pass = "";
$dbname = "auth_system";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("Database Connection Failed: " . mysqli_connect_error());
}
?>
