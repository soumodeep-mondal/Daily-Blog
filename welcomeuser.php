<?php
require "securelock.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Write your blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link href="css/welcome.css" rel="stylesheet">
    <link href="css/welcomemain.css" rel="stylesheet">
</head>
    <body>

        <div class="Headline"><?php echo "Welcome " .$_SESSION['user_name'] ."<br>"."Write your own blog here";?></div>


        <form action="blogdatabase.php" method="POST" enctype="multipart/form-data">
            <div class="blog-container">
                <div class="blog-header">
                    <div class="blog-body">
                        
                        <i class="bi bi-person-fill-up bi-7x" style="font-size: 40px;"></i>
                        <input type="file" name="author_img" style="font-size: 12px; padding-left:10px;">

                        <h4><input type="text" class="form-control"  name="author_name" placeholder="Type your name..." required="required"></h4>
                    </div>
                </div>

                <div class="blog-body">
                    <div class="blog-title">
                        <h1><input type="text" class="form-control"  name="blog_title" placeholder="Type blog title..." required="required" > </h1>
                    </div>

                    <div class="blog-summary">
                        <p> <textarea class="form-control" rows="10" name="blog" placeholder="Type your blog..." required="required"></textarea></p>
                    </div>

                    <div class="blog-tags">
                        <ul>
                            <li><input type="text" class="form-control"  name="author_designation" placeholder="Type your Designation" required="required"></li>
                          
                        </ul>
                    </div>
                
                </div>

                <div class="blog-footer">
                    <ul>
                    <li><input type="date" class="form-control"  name="upload_date" placeholder="date" required="required"></li>
                    <button class="bubbly-button" type="submit">Submit</button>
                    </ul>
                </div>
            </div>
        </form>
    </body>
</html>

