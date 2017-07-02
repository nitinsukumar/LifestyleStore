<?php
	require 'includes\common.php';
	$item_id=$_GET['id'];
	$query="SELECT * FROM users WHERE email='{$_SESSION['email']}'";
	$result=mysqli_query($con,$query);
	$row=mysqli_fetch_array($result);
	$user_id=$row['id'];
	$query="INSERT INTO users_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
	$result=mysqli_query($con,$query);
	header('location:product.php'); 

?>