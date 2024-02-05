<?php
session_start();

if(isset($_SESSION['username'])){
    $uname = $_SESSION['username'];
    echo "Welcome '$uname'";
}else{
    header("Location: index.php");
}
?>