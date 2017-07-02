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
        <title>Settings | Life Style Store</title>
		<link href="index.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
	<?php  
   include 'includes\header.php';
   ?>
        <div class="container" style="margin-top:50px;margin-bottom:340px;">
            <div class="row">
                    <div class="col-xs-6 col-xs-offset-3">
					<?php
// Turn off all error reporting
error_reporting(0);
?>
					<form method="POST" action="settings_script.php">
					<h3>Change Password</h3>
						<div class="form-group">
							<input type="password" name="pass" placeholder="Enter Old Password" class="form-control" required><br>
							<input type="password" name="pass1" placeholder="Enter New Password" class="form-control" required><br>
							<input type="password" name="pass2" placeholder="Re Type New Password" class="form-control" required><br>
							<input type="submit"  value="Change" class="btn btn-primary ">
							
				   <div class="text-danger"><h5><?php echo $_GET['error2']; ?></h5>
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