<!--  Signin Validation session start ===================================================================-->
<?php
$conn=mysqli_connect('localhost','id20010191_mydatabase','','id20010191_myserver') or die('connection not sucessful'.mysqli_connect_errors());
$user= $_POST['user_name'] ;
$pass=$_POST['user_password'] ;



$sql="SELECT * FROM `usersdatabase` WHERE username='$user'";

$query=mysqli_query($conn,$sql);

$num=mysqli_num_rows($query);

if ($num==1){
    while($r=mysqli_fetch_assoc($query))
    {
        if(password_verify($pass,$r['pass_word'])){
            session_start();
            $_SESSION['user_name']=$user;
            echo header("location:welcomeuser.php");
           
           }
           else{
               echo "<script>alert('Wrong input')</script>";
               echo "<script>location.href='signin.php'</script>";
           }
    }
   
    }




?>
<!--  Register Validation End  ===================================================================-->

    
        
       




                    
              


