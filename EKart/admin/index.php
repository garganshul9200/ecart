<?php include('config.php');
 session_start();
 if($_SESSION)
  {
    header("Location: http://localhost/ekart/admin/add_category.php");
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

  <body>
  <nav class="navbar navbar-default">
          <div class="container">
              <div class="navbar-header">
                <a class="navbar-brand" href="http://localhost/ekart/">E-Kart</a>
              </div>
                <ul class="nav navbar-nav">
                <li><a href="http://localhost/ekart/header.php">Home</a></li>
                <li><a href="http://localhost/ekart/shop.php?per=men">Men</a></li>
                <li><a href="http://localhost/ekart/shop.php?per=women">Women</a></li>
                <li><a href="http://localhost/ekart/shop.php?per=kids">Kids</a></li>
                <li class="dropdown">
                    <a class="dropbtn" href="">Categories</a>
                    <ul class="dropdown-content">
                     <?php
                        $cat_sql = "SELECT * FROM product_category";
                        $result = $conn->query($cat_sql);
                        if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                        ?>
                        <li><a href="http://localhost/ekart/category.php?cat=<?php echo $row["slug"]; ?>"><?php echo $row["name"]; ?></a></li>
                        <?php
                        }
                      }
                     ?>
                    </ul>
                </li>
              </ul>
          </div>
      </nav>


<div class="container">
    <div class="row">

      <div class="col-xs-12 col-md-3"></div>
      <div class="col-xs-12 col-md-6">
      <h1 style="text-align: center;">ADMIN LOGIN</h1>
        <form method="post" action="">
        <div class="col-xs-12 col-md-12">
            <input type="text" class="form-control" name="user_name" placeholder="User Name" required/>
        </div>
          <div class="col-xs-12 col-md-12">
            <input type="password" class="form-control" name="password" placeholder="Password"/ required>
          </div>
          <div class="col-xs-12 col-md-12">
            <input type="submit" class="btn btn-success" name="submit" value="Login"/>
          </div>
        </form>
      </div>
      <div class="col-xs-12 col-md-3"></div>
    </div>
</div>

  	
  </body>
  </html>

  <?php
if(isset($_POST['user_name']) && isset($_POST['password']))
{
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];
	  $sql="SELECT * FROM admin_details where username='$user_name' AND password='$password'";
  if ($result=mysqli_query($conn,$sql))
  {
  $rowcount=mysqli_num_rows($result);
  $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
 if($rowcount!=0)
 {
 $_SESSION['login']=1;
 $_SESSION['username']=$user_name;
 header("Location: add_category.php");
  }
 else
 {
	echo "Username or Password invalid"; 
 }

  }
}
?>