<?php
    require "header.php";
    require "inlcudes/type.inc.php";
    ?>

<section id="main-area">
  <div class="container">
    <div class="row">    
      <div class="side1 col-md-18 order-md-24 mb-5 mb-md-0">
      <!-- Products -->
        <h2 class="ttl-deco h5 mb-3">Products</h2>
        <div class="row mb-45px ">
          <?php
              if (isset($_GET["type"])) {
                  while ($list = $type->fetchAll()) {
                      foreach ($list as $row) {
                          printf('<div class="col-md-4 col-12 mb-4 matchHeight sameHeight">
                          <a  href="item.php?id='.$row[0].'"><img src="images/'.$row[0].'.jpg" alt="'.$row[1].'" class="img-fluid hoverImg mb-2 samesize"></a>
                          <p class="text-center mb-0 txtWrap">'.$row[0].' <strong>'.$row[1].'</strong></p>
                          <a class="btn btn-info d-block mt-3" href="item.php?id='.$row[0].'">View</a>

                      </div>');
                          ;
                      }
                  }// end while
              } elseif (isset($_GET["category"])) {
                while ($list = $category->fetchAll()) {
                  foreach ($list as $row) {
                      printf('<div class="col-md-4 col-12 mb-4 matchHeight sameHeight">
                      <a  href="item.php?id='.$row[0].'"><img src="images/'.$row[0].'.jpg" alt="'.$row[1].'" class="img-fluid hoverImg mb-2 samesize"></a>
                          <p class="text-center mb-0 txtWrap">'.$row[0].' <strong>'.$row[1].'</strong></p>
                          <a class="btn btn-info d-block mt-3" href="item.php?id='.$row[0].'">View</a>

                  </div>');
                      ;
                  }
              }// end while
          
              }

          ?>
          <div class="col-md-12 centertxt">
            
          </div>
        </div>
      <!-- Products -->
      </div>
      <?php
      include 'sidebar.php'
      ?>  
    </div><!-- row -->
  </div>
</section>

<?php
    require "footer.php";

    ?>