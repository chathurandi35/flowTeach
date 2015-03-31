<?php
$news1=$_POST['news1'];
$news2=$_POST['news2'];
$image=$_POST['file'];
//echo "$password";
//echo "$username";

$con=mysqli_connect("localhost","root","","flowteach");

$target_dir = "uploads/".$_FILES['file']['name'];
move_uploaded_file($_FILES['file']['tmp_name'],$target_dir);
echo "uploaded";

$x=mysqli_query($con,"INSERT INTO second(news1,news2,image)
VALUES ('$news1', '$news2','$image')");
//echo "value=" .$x;
if($x==1){
	header("location: home.php");
}

 ?>
 