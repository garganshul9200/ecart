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
          <form method="post" action="" enctype="multipart/form-data">
             <div class="col-xs-12 col-md-12">
            <input type="text" class="form-control" name="cat_name" placeholder="Category Name"/>
             
             </div>

             <div class="col-xs-12 col-md-12">
            <input type="file" class="form-control" name="snap"/>
             
             </div>

             <div class="col-xs-12 col-md-12">
            <input type="submit" class="btn btn-success" name="submit" value="Add Category"/>
             
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
	
if($_POST['cat_name']!='')
{
  $cat_name = $_POST['cat_name'];
  $trim_slug=trim($cat_name," ");
  $slug = preg_replace('/[^A-Z0-9]+/i', "_", $trim_slug);

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
      $sql="SELECT * FROM product_category where name='$cat_name'";
      if ($result=mysqli_query($conn,$sql))
      {
      $rowcount=mysqli_num_rows($result);
      if($rowcount)
      {
        echo "category exists";
      }
      else
      {
        $add_query="insert into product_category(name,slug, cat_image ) values ('$cat_name','$slug', '$final_file')";
          if(mysqli_query($conn, $add_query))
          {
            echo "category Added";
          }
          else
          {
            echo "Error in data";
          }
      }
  
      }


    }
}

}
else
{
  echo "error in Data";
}



	
}



  ?>