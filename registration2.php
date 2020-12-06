<?php


session_start();


header("location:order.php");



$con = mysqli_connect('localhost','root');
if($con){
	echo "connection successfull";
}else{
	echo "no connection";
}

mysqli_select_db($con,'order');

$name = $_POST['Name'];
$about = $_POST['about'];


$q = "select * from userdata where Name = '$name' && about = '$about' ";


	$qy = "insert into orderinfo(Name,about) values ('$name','$about')";
	mysqli_query($con,$qy);



?>