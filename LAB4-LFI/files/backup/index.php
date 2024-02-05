<?php
if(isset($_GET['page'])){
    include($_GET['page']);
}
else{
    header("Location: index.php?page=about.html");
}
?>