<?php
$news1=$_POST['news1'];
$news2=$_POST['news2'];
$image=$_POST['userfile'];
//echo "$password";
//echo "$username";

$con=mysqli_connect("localhost","root","","flowteach");

$x=mysqli_query($con,"INSERT INTO second(news1,news2,image)
VALUES ('$news1', '$news2','$image')");
//echo "value=" .$x;
if($x==1){
	header("location: home.php");
}

 ?>
 