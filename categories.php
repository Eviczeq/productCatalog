<?php
    require "header.php";
    require "inlcudes/category.inc.php";
?>

    
<section id="main-area">
  <div class="container">
    <div class="row">    
      <div class="side1 col-md-18 order-md-24 mb-5 mb-md-0">
      <h4 class="ttl-deco mb-4 h6"> Categories</h4>
        <h5 class="text-warning h6 mb-3"><i class="fas fa-diamond" style="font-size:.65rem; vertical-align: 2px;"></i> Type</h5>
        <div >
        <ul  style="list-style-type: none;">
        <?php
        foreach ($rowsType as $rowType) {
                    printf('<li class="d-inline "><a class="m-1 text-decoration-none btn btn-info buttonCategories" href="product.type?type='.$rowType.'">'.$rowType.'</a></li>');
                    ;
                }
          ?>        </ul>
        </div>
        <h5 class="text-warning h6 mb-3"><i class="fas fa-diamond" style="font-size:.65rem; vertical-align: 2px;"></i> Category</h5>
        <div >
          <?php
          
          ?>
        <ul  style="list-style-type: none;">
        <?php
        foreach ($rows as $row) {
                    printf('<li class="d-inline "><a class="m-1 text-decoration-none btn btn-info buttonCategories" href="product.type?category='.$row.'">'.$row.'</a></li>');
                    ;
                }
          ?>
        </ul>
        </div>
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