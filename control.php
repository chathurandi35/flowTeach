<?php
$username=$_POST['name'];
$password=$_POST['age'];
//echo "$password";
//echo "$username";

$con=mysqli_connect("localhost","root","","flowteach");
if ($con)
  {
  echo "succesfuly to connected to my sql";
}

$x=mysqli_query($con,"INSERT INTO second(name,age)
VALUES ('$username', '$password')");
//echo "value=" .$x;
if($x==1){
echo "sucssesfuly";
}
 ?>