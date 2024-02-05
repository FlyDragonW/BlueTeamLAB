<?php
$allow_list = ["about.html"];
if(isset($_GET['page'])){
    if(in_array($_GET['page'], $allow_list)){
        include($_GET['page']);
    }
}
else{
    header("Location: index.php?page=about.html");
}
?>