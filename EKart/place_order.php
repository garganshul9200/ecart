<?php
include('header.php');

if($_GET['product']){
	global $row_id;	
	$product_id=$_GET['product'];
	$prod_sql = "SELECT * FROM `product_catalogue` WHERE id='$product_id'";
	$result = $conn->query($prod_sql);
	if ($result->num_rows > 0) {
	// output data of each row
		while($row = $result->fetch_assoc()) {
			$row_id= $row['id'];
			$prod_name= $row['name'];
			$prod_price= $row['price'];
			$cat_id = $row['category'];
			$prod_image = $row['image'];
		}
	}

	 	$cat_sql = "SELECT * FROM product_category WHERE id='$cat_id'";
        $result = $conn->query($cat_sql);
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        $cat_name=$row['name'];
        }
    }

}

?>
<html>
<html lang="en">
  <head>
      <title>Bootstrap Example</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="style.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>

  <body>
  <?php
if($row_id)
{
?>
  	<div class="container">
  	<div class="place_order">Place Your Order</div>
	  	<div class="row">
			<div class="col-xs-12 col-md-6">
				<div class="div_space">
					<span class="product_title">Name: </span>
					<span class="product_value"><?php echo $prod_name; ?></span>
				</div>
				<div class="div_space">
					<span class="product_title">Price: </span>
					<span class="product_value"><?php echo $prod_price; ?></span>
				</div>
				<div class="div_space">
					<span class="product_title">Category: </span>
					<span class="product_value"><?php echo $cat_name; ?></span>
				</div>

			</div>

			<div class="col-xs-12 col-md-6">
			<image src="images/<?php echo $prod_image; ?>" style="width: 20%;">
			</div>

  	<form method="post" action="thankyou.php">
	  		<div class="col-xs-12 col-md-6">
	  			<input type="text" name="name" class="form-control" placeholder="Name" required />
	  		</div>	
	  		<div class="col-xs-12 col-md-6">
	  			<input type="text" name="phone" class="form-control" placeholder="Phone Number" required/>
	  		</div>	
	  		<div class="col-xs-12 col-md-6">
	  			<input type="text" name="address1"  class="form-control"placeholder="address Line 1" required/>
	  		</div>	
	  		<div class="col-xs-12 col-md-6">
	  			<input type="text" name="address2" class="form-control" placeholder="address Line 2"/>
	  		</div>	
	  		<div class="col-xs-12 col-md-6">
	  			<input type="text" name="city" class="form-control" placeholder="City" required/>
	  		</div>	
	  		<div class="col-xs-12 col-md-6">
	  			<input type="text" name="state" class="form-control" placeholder="State" required/>
	  			<input type="hidden" name="product_id" value="<?php echo $row_id; ?>"/>
	  		</div>	
	  		<div class="col-xs-12 col-md-12">
	  			<input type="submit" name="submit" class="btn btn-success" value="Place Order"/>
	  		</div>
	  	</div>
  	</div>
	  	
	  	
	  	
	  	
	  	
	  	

	  	
	  	
	</form>
<?php
}
?>



  </body>
  </html>