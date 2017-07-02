<?php  
   require 'includes\common.php';
   if (!isset($_SESSION['email'])) 
       header('location: login.php');
   ?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Success</title>
		<link href="index.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
	<?php  
   include 'includes\header.php';
   ?>
     <?php
						$query="SELECT id FROM users WHERE email='{$_SESSION['email']}'";
						$result=mysqli_query($con,$query);
						$row=mysqli_fetch_array($result);
						$user_id=$row['id'];
						$query="UPDATE users_items SET status='Confirmed' WHERE user_id='$user_id' and status='Added to cart'";
						$result=mysqli_query($con,$query);
?>						
        <br>
        <br>
        <br>
        <br>
        <div class="container-fluid" id="content">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h3 align="center">Your order is confirmed. Thank you for shopping with us.</h3><hr>
                    <p align="center">Click <a href="product.php">here</a> to purchase any other item.</p>
                </div>
            </div>
        </div>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<?php  
   include 'includes\footer.php';
   ?>    
    </body>
</html>