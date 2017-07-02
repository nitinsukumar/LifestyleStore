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
        <title>Login | Life Style Store</title>
		<link href="index.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
	<?php  
   include 'includes\header.php';
   ?>
	<div class="jumbotron">
        <div class="container" style="margin-top:50px;margin-bottom:240px;">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="panel panel-primary">
						<div class="panel-heading">
						<h4>Login</h4>
						</div>
						<div class="panel-body">
						<p class="text-warning">Login to make a purchase</p>
						<?php
// Turn off all error reporting
error_reporting(0);
?>
						<form method="POST" action="login_submit.php">
							<div class="form-group">
							<label>Email:</label>
							<input type="email" name="email" class="form-control" placeholder="Enter your Email Id:"required>
							<label>Password:</label>
							<input type="password" name="pass" placeholder="Enter Your Password:" class="form-control" required>
							</div>
							<input type="submit" value="Submit" class="btn btn-primary">
						</form>
						<div class="text-danger"><h5><?php echo $_GET['error']; ?></h5>
						</div>
						<div class="panel-footer">
						Don't have an account?  <a href="signup.php">Register</a>
						</div>
					</div>
                </div>
            </div>
        </div>
		</div>
		</div>
        <?php  
   include 'includes\footer.php';
   ?>
</body>
</html>