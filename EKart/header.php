  <?php include('admin/config.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Ekart</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="style.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  
  <body>
      <nav class="navbar navbar-default">
          <div class="container">
              <div class="navbar-header">
                <a class="navbar-brand" href="http://localhost/ekart/EKart/index.php">E-Kart</a>
              </div>
              <ul class="nav navbar-nav">
                <li><a href="http://localhost/ekart/EKart/index.php">Home</a></li>
                <li><a href="shop.php?per=men">Men</a></li>
                <li><a href="shop.php?per=women">Women</a></li>
                <li><a href="shop.php?per=kids">Kids</a></li>
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
                        <li><a href="category.php?cat=<?php echo $row["slug"]; ?>"><?php echo $row["name"]; ?></a></li>
                        <?php
                        }
                      }
                      ?>
                        

                    </ul>
                </li>
              </ul>
          </div>
      </nav>