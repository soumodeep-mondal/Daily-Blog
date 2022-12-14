
<!--  Connection My Database ===============================================================-->

<?php

// Change Table Name //
$conn=mysqli_connect('localhost','id20010191_mydatabase','','id20010191_myserver') or die('connection not sucessful'.mysqli_connect_errors());

$username= $_POST['user_name'] ;
$password= $_POST['user_password'] ;
$hash=password_hash($password,PASSWORD_DEFAULT);

$sql="SELECT * FROM `usersdatabase` WHERE username='$username'";
$query=mysqli_query($conn,$sql);
$num=mysqli_num_rows($query);
if($num>0)
{
    echo "<script>alert('Wrong input')</script>";
    echo "<script>location.href='register.php'</script>";
}
else{
    $sql="INSERT INTO `blogusers`( `username`, `pass_word`) VALUES ('$username','$hash')";
    $query=mysqli_query($conn,$sql);
    if($query){?>
        <div class="blog-submit-heading"><?php echo "You are registered sucessfully"."<br>"."Please sign in" ;?>
        <br>
        <a href="signin.php"><button class="bubbly-button">&nbsp;&nbsp;&nbsp;&nbsp;Sign in &nbsp;&nbsp;&nbsp;</button></a>

    </div>
    <?php
    }
    
    else{
        echo "error";
    }
}

// Change Database Name //


?>
<!--  Connection My Database End ===================================================================-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Successfully</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="css/submitdata.css" rel="stylesheet">

    <?php
    
    
    ?>
    