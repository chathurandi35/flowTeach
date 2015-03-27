<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server..
$db = mysql_select_db("flowtech", $connection); // Selecting Database
//Fetching Values from URL

if(isset($_POST['name'])){
	$name=$_POST['name'];
}

if(isset($_POST['email'])){
	$name=$_POST['email'];
}

if(isset($_POST['subject'])){
	$name=$_POST['subject'];
}

if(isset($_POST['message'])){
	$name=$_POST['message'];
}

//Insert query
$query = mysql_query("insert into contact_table(Name, Email, Subject, Message) values ('$name', '$email', '$subject','$message')");
echo "Form Submitted Succesfully";
mysql_close($connection); // Connection Closed
?>