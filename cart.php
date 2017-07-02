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
        <title>Cart | Life Style Store</title>
		<link href="index.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
	<?php  
   include 'includes\header.php';
   ?>
        <br>
        <div class="container" style="margin-top:50px;margin-bottom:240px;">
            <div class="row">
                    <div class="col-xs-6 col-xs-offset-3">
					<div class="table-responsive">
						<table class="table table-striped">
						<tr>
						<th>Item Number</th>
						<th>Item Name</th>
						<th>Price</th>
						<th>  </th>
						</tr>
						<?php
						$query="SELECT id FROM users WHERE email='{$_SESSION['email']}'";
						$result=mysqli_query($con,$query);
						$row=mysqli_fetch_array($result);
						$user_id=$row['id'];
						$query="SELECT * FROM users_items WHERE user_id='$user_id' and status='Added to cart'";
						$result=mysqli_query($con,$query);
						if(!mysqli_num_rows($result))
						{?>
						<tr>
						<td>0</td>
						<td>Nil</td>
						<td>0</td>
						</tr>
						<tr>
							<td> </td>
							<td>Total </td>
							<td>Rs 0/- </td>
							<td> <a href="product.php"  class="btn btn-primary ">Add Items to Cart First</a></td>
						
						</tr>
						<?php
						} else {
							$query="SELECT i.id,i.name,i.price FROM items i INNER JOIN users_items ui ON i.id=ui.item_id WHERE ui.user_id='$user_id' and ui.status='Added to cart'";
							$result=mysqli_query($con,$query);
							$sum=0;
							while($row=mysqli_fetch_array($result))
							{$sum+=$row['price'];
						     ?>
							<tr>
						<td><?php echo $row['id'];?></td>
						<td><?php echo $row['name'];?></td>
						<td><?php echo $row['price'];?></td>
						<td> <?php echo "<a href='Cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove</a>";?></td>
						</tr> 
						    <?php
							}
							?>
							<tr>
							<td> </td>
							<td><h4>Total</h4> </td>
							<td><h4 class="text-primary"><?php echo $sum?></h4></td>
							<td> <a href="success.php?"  class="btn btn-primary ">Confirm Order</a></td>
							</tr>
						<?php }?>
						</table>
					</div>
					
					</div>
            </div>
        </div>
		<br><br><br><br>
		<br><br><br><br>
		<br><br><br><br>
		 <?php  
   include 'includes\footer.php';
   ?>    
    </body>
</html>