<?php
require "securelock.php"
?>
<!--  Connection My Database ===============================================================-->
<?php
// Change Table Name //
$conn=mysqli_connect('localhost','id20010191_mydatabase','','id20010191_myserver') or die('connection not sucessful'.mysqli_connect_errors());

// Author Image Upload=========================================================================



    if(isset($_FILES['author_img'])){
        $errors= array();
        $authorimg=$_FILES['author_img']['name'];
        $authorimg_temp=$_FILES['author_img']['tmp_name'];
        move_uploaded_file($authorimg_temp,"images/".$authorimg);
        $authorimg_size=$_FILES['author_img']['size'];
        $authorimg_type=$_FILES['author_img']['type'];
        $passexten=explode(".", $authorimg);
        $authorimg_ext=strtolower(end($passexten));
        $authorimg_mb=$authorimg_size/1024;
        $extensions= array("jpg","png");
        if(in_array($authorimg_ext,$extensions)===false){
            $errors[]="<script>alert('Extension not allow, only jpg or png allow.')</script>";
            $errors[]="<script>location.href='welcomeuser.php'</script>";
        }
        if($authorimg_size>1000000){
            $errors[]="<script>alert('Your file is Large, must be file size under 1mb')</script>";
            $errors[]="<script>location.href='welcomeuser.php'</script>";
        }
        if(empty($errors)==true){
            move_uploaded_file($authorimg_temp,"images/".$authorimg);
        }
        else{
            print_r ($errors);
        }
    }







// Author Image Upload End ===================================================================//

$authorname= $_POST['author_name'] ;
$blogtitle= $_POST['blog_title'] ;
$blog= $_POST['blog'] ;
$designation= $_POST['author_designation'] ;
$date= $_POST['upload_date'] ;

// Change Database Name //
$sql="INSERT INTO `writtenblogs`(`author_image`, `Author Name`, `Blog Title`, `Blog`, `Designation`, `Upload Date`) VALUES ('$authorimg','$authorname','$blogtitle','$blog','$designation','$date')";



?>
<!--  Connection My Database End ===================================================================-->



<!--  Submit Display ===================================================================-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog submitted</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="css/submitdata.css" rel="stylesheet">


</head>
<body>

    <?php
    $query=mysqli_query($conn,$sql);
    if($query){?>
        <div class="blog-submit-heading"><?php echo "Your Blog Submit Sucessfully"."<br>" ;?>
            <a href="signout.php"><button class="bubbly-button">Sign Out</button></a>
            <a href="welcomeuser.php"><button class="bubbly-button">Write again </button></a>
        </div>
    <?php
    }
    ?>

</body>
</html>

<!--  Submit Display  End ===================================================================-->