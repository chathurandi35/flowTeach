<?php
$news1=$_POST['news1'];
$news2=$_POST['news2'];
$image=$_POST['fileToUpload'];
//echo "$password";
//echo "$username";

$con=mysqli_connect("localhost","root","","flowteach");

$target_dir = ".uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

$x=mysqli_query($con,"INSERT INTO second(news1,news2,image)
VALUES ('$news1', '$news2','$image')");
//echo "value=" .$x;
if($x==1){
	header("location: home.php");
}

 ?>
 