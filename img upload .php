// Author Image Upload=========================================================================//
if(isset($_FILES['author_img'])){
    $errors= array();
    $authorimg=$_FILES['author_img']['name'];
    $authorimg_temp=$_FILES['author_img']['tmp_name'];
    $authorimg_size=$_FILES['author_img']['size'];
    $authorimg_type=$_FILES['author_img']['type'];
    $authorimg_ext=strtolower(end(explode(".", $authorimg)));
    $authorimg_mb=$authorimg_size/1024;
    $extensions= array("jpg","png");
    if(in_array($authorimg_ext,$extensions)===false){
        echo "<script>alert('extension not allow, only jpg or png allow.')</script>";
    }
    if($authorimg_size>1000000){
        $errors[]="Your file is Large";
    }
    if(empty($errors)==true){
        move_uploaded_file($authorimg_temp,"images/".$authorimg);
    }
    else{
        print_r ($errors);
    }
}
// Author Image Upload End ===================================================================//
