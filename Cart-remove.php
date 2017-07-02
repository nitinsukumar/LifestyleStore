<?php
	require 'includes\common.php';
	$item_id=$_GET['id'];
	$query="SELECT * FROM users WHERE email='{$_SESSION['email']}'";
	$result=mysqli_query($con,$query);
	$row=mysqli_fetch_array($result);
	$user_id=$row['id'];
	$query="DELETE FROM users_items WHERE user_id='$user_id' and item_id='$item_id'";
	$result=mysqli_query($con,$query);
	header('location:cart.php'); 

?>