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
        <title>Signup</title>
		<link href="index.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
	<?php  
   include 'includes\header.php';
   ?>
   <div class="jumbotron">
        <div class="container" style="margin-top:50px;margin-bottom:200px;">
            <div class="row">
                    <div class="col-xs-6 col-xs-offset-3">
					<?php
// Turn off all error reporting
error_reporting(0);
?>
					<form method="POST" action="signup_script.php">
					<div class="text-danger"><h5><?php echo $_GET['error1']; ?></h5></div>
					<h3>Signup</h3>
						<div class="form-group">
							<label for="name">Name</label>
							<input type="text" name="name" pattern="[a-zA-Z ]+" placeholder="Name" class="form-control"  required><br/>
							
								<label for="email">Email</label>
							<input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Email" class="form-control" required><br>
							
								<label for="pass">Password</label>
							<input type="password" name="pass" pattern=".{6,}" placeholder="Min 6 chars" class="form-control" required><br>
							
								<label for="contact">Contact</label>
							<input type="text" name="phone" maxlength="10" pattern="[0-9]{10}"  class="form-control" placeholder="Enter your mobile number" required>
							<br>	
							<label for="city">City</label>
							<input type="text" name="city" placeholder="City" class="form-control" required ><br>
							
							<label for="address">Address</label>
							<input type="text" name="address" placeholder="Address" class="form-control" required><br>
							
							<input type="submit"  value="Submit"class="btn btn-primary ">
							
						</div>
					</form>
					
            </div>
        </div>
		</div>
		</div>
		<?php  
   include 'includes\footer.php';
   ?>
    </body>
</html>