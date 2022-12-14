<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<link href="css/main.css" rel="stylesheet">
<link href="css/create-button.css" rel="stylesheet">

</head>
<body>

        <nav class="navbar navbar-light bg-light fixed-top">
            <div class="container-fluid">
            <a class="navbar-brand Headline" href="#">The Daily Blogs</a>
                    <div id="create-btn">
                        <a href="signin&register.php"><button class="bubbly-button">Write your own blog</button></a>
                    </div>
            </div>
        </nav>   
        
        
        
        <div class="col-sm-12">&nbsp;</div><div class="col-sm-12">&nbsp;</div><div class="col-sm-12">&nbsp;</div>
        <?php
            $conn=mysqli_connect('localhost','id20010191_mydatabase','','id20010191_myserver') or die('connection not sucessful'.mysqli_connect_errors());
            $sql="SELECT * FROM `blogswritten` WHERE 1";

            $query=mysqli_query($conn,$sql);

            while($blogdisplay=mysqli_fetch_assoc($query))

        {?>
        <div class="blog-container">
            
            <div class="blog-header">
                <div class="blog-body">
                    <img src="images/<?php echo $blogdisplay ['author_image'] ?>" alt="user_img" width="80px" height="80px" style="border-radius:50%;">
                    <h3><?php echo $blogdisplay ['Author Name'] ?></h3>
                </div>
            </div>
            <div class="blog-body">
                <div class="blog-title">
                    <h1><?php echo $blogdisplay ['Blog Title'] ?></h1>
                </div>
                <div class="blog-summary">
                    <p><?php echo $blogdisplay ['Blog'] ?></p>
                </div>
            </div>
            <div class="blog-footer">
                <ul> 
                    <li> 
                        <p class="published-date">Designation : <?php echo $blogdisplay ['Designation'] ?></p>
                    </li>
                     <li>
                        <p class="published-date"><?php echo $blogdisplay ['Upload Date'] ?></p>
                    </li>
                </ul>
            </div> 
        </div>

        <?php 
        }   
        ?>
<div class="col-sm-12">&nbsp;</div><div class="col-sm-12">&nbsp;</div><div class="col-sm-12">&nbsp;</div>


</body>
</html>