<?php include('header.php'); ?>
      <section class="background-slider">
      </section>

      <section class="category-section">
          <div class="category-header">#FEATURED CATEGORIES</div>
          <div class="container">
              <div class="row">
                      <?php
                        $pro_sql = "SELECT * FROM product_category";
                        $result = $conn->query($pro_sql);
                        if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                        ?>
                        <div class="col-md-6 col-xs-12">
                            <div class="product-item">
                              <a href="category.php?cat=<?php echo $row["slug"]; ?>">
                                <div class="product-image" style=" background-image: url(http://localhost/ekart/images/<?php echo $row["cat_image"]; ?>);"></div>
                                <div class="category-name"><?php echo $row["name"]; ?></div>
                              </a>
                            </div>
                        </div>
                        <?php
                        }
                      }
                      ?>
                 
          </div>

      </section>
    <?php include('footer.php'); 
?>