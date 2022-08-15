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
include('admin/config.php');
if(isset($_POST['submit'])){
$name=$_POST['name'];
$phone=$_POST['phone'];
$address1=$_POST['address1'];
$address2=$_POST['address2'];
$city=$_POST['city'];
$state=$_POST['state'];
$product_id=$_POST['product_id'];

 $add_query="INSERT INTO placed_order (name, phone, address1, address2, city, state, product_id) 
    values ('$name','$phone', '$address1', '$address2', '$city', '$state' ,'$product_id')";

        if ($conn->query($add_query) === TRUE) {
           
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
	            ?>
            <div class="container">
  	<div class="place_order">Thank you for placing your order.</div>
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
		</div>
	</div>

            <?php
           

        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }



}


?>
</body>
</html>