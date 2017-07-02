<?php  
   require 'includes\common.php';
   $email=$_POST['email'];
   $regex_email="/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/";
   
   if(!preg_match($regex_email,$email))
   {header('location:signup.php?error1=Error in Email Id');}

   $query="SELECT email from users where email='$email'";
   $result=mysqli_query($con,$query);
   
   if(mysqli_num_rows($result)>0)
   {header('location:signup.php?error1=Email Id Already Exists');}

   else
   {   $pass=mysqli_real_escape_string($con,$_POST['pass']);
        
       $regex_pass="/^{6,}/";
       if(!preg_match($regex_pass,$pass))
       {header('location:signup.php?error1=Error in Password entered');}
       $pass=md5(mysqli_real_escape_string($con,$_POST['pass']));
	   $name=mysqli_real_escape_string($con,$_POST['name']);
	   $phone=mysqli_real_escape_string($con,$_POST['phone']);
	   $city=mysqli_real_escape_string($con,$_POST['city']);
	   $address=mysqli_real_escape_string($con,$_POST['address']);
	   
	   $regex_name="/^[a-zA-Z ]+/";
	   $regex_phone="/^[0-9]{10}/";
	   
	   if(!preg_match($regex_name,$name))
   {header('location:signup.php?error1=Error in Name');}

if(!preg_match($regex_phone,$phone))
   {header('location:signup.php?error1=Error in Contact Number');}

      $query="INSERT INTO users VALUES(null,'$name','$email','$pass','$phone','$city','$address')";
      $result=mysqli_query($con,$query);

	   $_SESSION['email']=$row['email'];
	   $_SESSION['id']=mysqli_insert_id($con);
	   header('location:product.php');   
   }
   ?>
   
   <html>
   sdsdsdsd
   </html>