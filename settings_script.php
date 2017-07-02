<?php
	require 'includes\common.php';
	$pass=md5(mysqli_real_escape_string($con,$_POST['pass']));
	$pass1=md5(mysqli_real_escape_string($con,$_POST['pass1']));
	$pass2=md5(mysqli_real_escape_string($con,$_POST['pass2']));
	$query="SELECT * from users where email='{$_SESSION['email']}' and password='$pass'";
    $result=mysqli_query($con,$query);
   if(mysqli_num_rows($result)==0)
   {header('location:settings.php?error2=Old Password not matching!!');}
   else
   {
	if($pass1==$pass2 and strlen($pass1>=6))
	{
	$query="UPDATE users SET password='$pass1' WHERE password='$pass'";
	$result=mysqli_query($con,$query);
	header('location:product.php'); 
	}
	else
	header('location:settings.php?error2=New Password and retyped don\'t match!!');}
?>