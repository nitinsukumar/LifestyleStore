<?php  
   require 'includes\common.php';
   $email=mysqli_real_escape_string($con,$_POST['email']);
   $pass=md5(mysqli_real_escape_string($con,$_POST['pass']));
   $query="SELECT id,email from users where email='$email' and password='$pass'";
   $result=mysqli_query($con,$query);
   if(mysqli_num_rows($result)==0)
   {header('location:login.php?error=Incorrect Login Details');}
   else
   {
	   $row=mysqli_fetch_array($result);
	   $_SESSION['email']=$row['email'];
	   $_SESSION['id']=mysqli_insert_id($con);
	   header('location:product.php');   
   }
   ?>