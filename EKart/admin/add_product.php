 <?php include('config.php');
  session_start();
 if(!$_SESSION['login'])
  {
    header("Location: http://localhost/ekart/admin");

    } 
    
     ?>
<!DOCTYPE html>
<html lang="en">
  <head>

      <title>Bootstrap Example</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="../style.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>

  <body class="admin_pannel">
  <nav class="navbar navbar-default">
          <div class="container">
              <div class="navbar-header">
                <a class="navbar-brand" href="http://localhost/ekart/">E-Kart</a>
              </div>
              <ul class="nav navbar-nav">
                <li class="admin_name"><?php echo "welcome ".$_SESSION['username']; ?></li>
              </ul>
          </div>
      </nav>

  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-md-4 left_pannel">
      <ul class="left_link">
      <li><a href="add_category.php">Add Category</a></li>
      <li><a href="add_product.php">Add Product</a></li>
      <li><a href="logout.php">Logout</a></li>
      </ul>
     
      </div>
      <div class="col-xs-12 col-md-1">
      </div>
      <div class="col-xs-12 col-md-6 right_pannel">
            <form method="post" action=""  enctype="multipart/form-data">
            <div class="col-xs-12 col-md-12">
                <input type="text" class="form-control" name="pro_name" placeholder="Name"/>
            </div>

             <div class="col-xs-12 col-md-12">
                <input type="number" class="form-control" name="price" placeholder="Price"/>
            </div>

             <div class="col-xs-12 col-md-12">
                <select class="form-control" name="category_dropdown">
      <option>--Select Category--</option>
    <?php
    $sql = "SELECT * FROM product_category";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      ?>
      <option value="<?php echo $row["id"]; ?>"><?php echo $row["name"]; ?></option>
      <?php
    }
}
?>    </select>
            </div>

             <div class="col-xs-12 col-md-12">
                 <select class="form-control" name="product_type">
      <option>--Select Type--</option>
      <option value="men">Men</option>
      <option value="women">Women</option>
      <option value="kids">Kids</option>
    </select>
            </div>

             <div class="col-xs-12 col-md-12">
               <input type="number" class="form-control" name="quantity" placeholder="quantity"/>
            </div>

             <div class="col-xs-12 col-md-12">
              <input class="form-control" type="file" name="snap"/>
            </div>

            <div class="col-xs-12 col-md-12">
              <input type="submit" class="btn btn-success" name="submit" value="Add Product"/>
            </div>
    
    
   
    
    
   
    </form>
      </div>

      <div class="col-xs-12 col-md-1">
      </div>


    </div>
  </div>







  
  </body>
  </html>

  <?php
if(isset($_POST['submit']))
{

  $pro_name = $_POST['pro_name'];
  $price = $_POST['price'];
  $category_dropdown=$_POST['category_dropdown'];
  $product_type=$_POST['product_type'];
  $quantity=$_POST['quantity'];
  $trim_slug=trim($pro_name," ");
  $slug = preg_replace('/[^A-Z0-9]+/i', "_", $trim_slug);
  if($pro_name!='' && $price!='' && $category_dropdown!='' && $product_type!='' && $quantity!='')
  {

     $query = "SELECT slug FROM product_catalogue";
  $result = $conn->query($query);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       // echo $row['slug'];
       $slug=$row['slug'].'1';
    }
} else {
     $slug=$slug;
}



  $image_snap=basename($_FILES["snap"]["name"]);
  $target_dir = "../images/";
  $target_file = $target_dir . basename($_FILES["snap"]["name"]);
  $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
    echo "<div class='result-head'>Sorry, only JPG, JPEG, PNG files are allowed.</div>";

}
else
{
   if (move_uploaded_file($_FILES["snap"]["tmp_name"], $target_file)) {
      $final_file=basename( $_FILES["snap"]["name"]);
      
   $add_query="INSERT INTO product_catalogue (name, slug, price, category, image, type, quantity) 
    values ('$pro_name','$slug', '$price', '$category_dropdown', '$final_file', '$product_type' ,'$quantity')";

        if ($conn->query($add_query) === TRUE) {
            echo "Product Added";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
      
  
      


    }
}

  }
  else
  {
    echo "fields cannot be empty";
  }



 }



  ?>