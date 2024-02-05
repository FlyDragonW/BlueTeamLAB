<?php
session_start();

$host = 'bt-lab-2-mysql';
$user = 'root';
$password = 'passwd';
$database = 'lab_db';

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die('Database connection failed: ' . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $_SESSION['username'] = $username;
        header('Location: home.php');
    } else {
        echo "<script>alert('ERROR');</script>";
    }
}
?>