
<?php
session_start();

if(!isset($_SESSION['user_name'])){
    echo "<script>alert('Please sign in')</script>";
    echo "<script>location.href='signin.php'</script>";
}


?>