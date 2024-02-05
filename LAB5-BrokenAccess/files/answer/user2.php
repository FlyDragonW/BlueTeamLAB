<?php session_start(); ?>
<!DOCTYPE html>
<body>
<?php
if($_SESSION['username'] === '2'){
    echo "<h1>This is user2.php</h1>";
}
?>
</body>
</html>