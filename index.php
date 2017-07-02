<?php  
   require 'includes\common.php';
   if (isset($_SESSION['email'])) 
       header('location: product.php');
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
    <title>Lifestyle Store</title>
	<link href="index.css" rel="stylesheet" type="text/css"/>
  </head>
  <body>
   <?php  
   include 'includes\header.php';
   ?>
	<div class="banner-img">
		<div class="container">
			<div class="banner-content">
				<h1>We Sell Lifestyle</h1>
				<p>Flat 40% OFF on premium brands</p><br>
				<a href="product.php" class="btn btn-danger">Shop Now</a>
			</div>
		</div>
	</div>
	<?php  
   include 'includes\footer.php';
   ?>
  </body>
</html>