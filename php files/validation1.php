<?php

session_start();

$con=mysqli_connect('127.0.0.1','root','','userregistration');


$name= $_POST['user'];
$pass= $_POST['password'];

$s= "select * from logindb where name='$name' && password='$pass'";

$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num==1){
	$_SESSION['username'] = $name;
	header('location:create.php');
}
else{
	header('location:loginpage1.php');
}

?>