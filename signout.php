<?php

session_start();

if(isset($_SESSION['user_name'])){
    session_unset();
    session_destroy();
    echo header("location:index.php");
}
else{
    echo header("location:index.php");
}


?>