<?php
    require "header.php";
    require "inlcudes/allproducts.inc.php";
    ?>

<section id="main-area">
  <div class="container">
    <div class="row">    
      <div class="side1 col-md-18 order-md-24 mb-5 mb-md-0">
      <!-- Products -->
        <h2 class="ttl-deco h5 mb-3">Products</h2>
        <div class="row mb-45px ">
          <?php
            while ($list = $result->fetchAll()) {
                foreach ($list as $row) {
                    printf('<div class="col-md-4 col-12 mb-4 sameHeight ">
                          <a  href="item.php?id='.$row[0].'"><img src="images/'.$row[0].'.jpg" alt="'.$row[1].'" class="img-fluid hoverImg mb-2 samesize"></a>
                          <p class="text-center mb-0 txtWrap">'.$row[0].' <strong>'.$row[1].'</strong></p>
                          <a class="btn btn-info d-block mt-3" href="item.php?id='.$row[0].'">View</a>

                      </div>');
                    ;
                }
            }// end while
          ?>
          <div class="col-md-12 centertxt">
            <?php
            /******  build the pagination links ******/
            // range of num links to show
            $range = 9;

            // if not on page 1, don't show back links
            if ($currentpage > 1) {
              // show << link to go back to page 1
              echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=1'><<</a> ";
              // get previous page num
              $prevpage = $currentpage - 1;
              // show < link to go back to 1 page
              echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$prevpage'><</a> ";
            } // end if 

            // loop to show links to range of pages around current page
            for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) {
              // if it's a valid page number...
              if (($x > 0) && ($x <= $totalpages)) {
                // if we're on current page...
                if ($x == $currentpage) {
                    // 'highlight' it but don't make a link
                    echo " [<b>$x</b>] ";
                // if not current page...
                } else {
                    // make it a link
                    echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$x'>$x</a> ";
                } // end else
              } // end if 
            } // end for
                            
            // if not on last page, show forward and last page links        
            if ($currentpage != $totalpages) {
              // get next page
              $nextpage = $currentpage + 1;
              // echo forward link for next page 
              echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$nextpage'>></a> ";
              // echo forward link for lastpage
              echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$totalpages'>>></a> ";
            } // end if
            /****** end build pagination links ******/

            ?>
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