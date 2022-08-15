  <?php
// $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

include('header.php');
if ($_GET['cat']){
$cat_slug=$_GET['cat'];
$prod_sql = "SELECT * FROM `product_category` WHERE slug='$cat_slug'";
        $result = $conn->query($prod_sql);
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        $cat_id = $row["id"];
        $cat_name= $row["name"];
          }
        }
?>
<section class="background-slider" style="background-image: url(<?php echo $background_url; ?>)">
</section>
<div class="category-header">#<?php echo $cat_name; ?></div>
<section class="product_section">
  <div class="container">
    <div class="row">

    <?php
        $prod_sql = "SELECT * FROM `product_catalogue` WHERE category='$cat_id'";
        $result = $conn->query($prod_sql);
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        ?>
        <div class="col-xs-12 col-md-3">
          <div class="product_block">
            <div class="product_image"><img src="http://localhost/ekart/images/<?php echo $row["image"]; ?>"></div>
            <div class="product_name"><?php echo $row["name"]; ?></div>
            <div class="product_price">Rs. <?php echo $row["price"]; ?>/-</div>
            <div class="product_buy"><a href="place_order.php?product=<?php echo $row["id"]; ?>"><button class="buy_now">Buy Now</button></a></div></div>
          </div>
      </div>
       <?php
        } 
        }
    ?>
    </div>
    </div>
</section>



<?php
include('footer.php');
}
else
{
  header("Location: http://localhost/ekart/");
  die();
}
  ?>
}