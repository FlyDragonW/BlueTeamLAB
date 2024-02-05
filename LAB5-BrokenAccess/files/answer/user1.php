<?php session_start(); ?>
<!DOCTYPE html>
<body>
<?php
if($_SESSION['username'] === '1'){
    echo "<h1>This is user1.php</h1>";
}
?>
</body>
</html>