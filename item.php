<?php
    require "header.php";
    require "inlcudes/product.inc.php";
    if(!isset($_SESSION['cart'])){
      $_SESSION['cart'] = array();
    }
    ?>


<section id="main-area">
  <div class="container">
    <div class="row">    
      <div class="side1 col-md-18 order-md-24 mb-5 mb-md-0">

      <!-- Products -->
        <h2 class="ttl-deco h5 mb-3">Product</h2>

        <div class="row">
          <?php
            $fileName1 = "images/".$row[0].".jpg";
            $fileName2 = "images/".$row[0].".1.jpg";
            $fileName3 = "images/".$row[0].".2.jpg";
            $fileName4 = "images/".$row[0].".3.jpg";
            $fileName5 = "images/".$row[0].".4.jpg";
                if (file_exists($fileName5)) {
                  $output = htmlspecialchars(5);
                echo '<div class="col-md-6"><div id="output" style="display: none;">'.$output.'</div>
                        <div class="slider-for mw-100">
                            <div class="carousel"><img class="imgCarousel" src="'.$fileName1.'" alt="'.$row[1].'" style=""></div>
                            <div class="carousel"><img class="imgCarousel" src="'.$fileName2.'" alt="'.$row[1].'" style=""></div>
                            <div class="carousel"><img class="imgCarousel" src="'.$fileName3.'" alt="'.$row[1].'" style=""></div>
                            <div class="carousel"><img class="imgCarousel" src="'.$fileName4.'" alt="'.$row[1].'" style=""></div>
                            <div class="carousel"><img class="imgCarousel" src="'.$fileName5.'" alt="'.$row[1].'" style=""></div>
                          </div>
                          <div class="slider-nav mw-100">
                            <div class="carousel"><img class="imgCarouselNav" src="'.$fileName1.'" alt="'.$row[1].'" style=""></div>
                            <div class="carousel"><img class="imgCarouselNav" src="'.$fileName2.'" alt="'.$row[1].'" style=""></div>
                            <div class="carousel"><img class="imgCarouselNav" src="'.$fileName3.'" alt="'.$row[1].'" style=""></div>
                            <div class="carousel"><img class="imgCarouselNav" src="'.$fileName4.'" alt="'.$row[1].'" style=""></div>
                            <div class="carousel"><img class="imgCarouselNav" src="'.$fileName5.'" alt="'.$row[1].'" style=""></div>

                          </div>
                        </div>';
                }elseif(file_exists($fileName4)){
                  $output = htmlspecialchars(4);
                echo '<div class="col-md-6"><div id="output" style="display: none;">'.$output.'</div>  <div class="slider-for mw-100">
                      <div class="carousel"><img class="imgCarousel" src="'.$fileName1.'" alt="'.$row[1].'" style=""></div>
                      <div class="carousel"><img class="imgCarousel" src="'.$fileName2.'" alt="'.$row[1].'" style=""></div>
                      <div class="carousel"><img class="imgCarousel" src="'.$fileName3.'" alt="'.$row[1].'" style=""></div>
                      <div class="carousel"><img class="imgCarousel" src="'.$fileName4.'" alt="'.$row[1].'" style=""></div>
                    </div>
                    <div class="slider-nav mw-100">
                      <div class="carousel"><img class="imgCarouselNav" src="'.$fileName1.'" alt="'.$row[1].'" style=""></div>
                      <div class="carousel"><img class="imgCarouselNav" src="'.$fileName2.'" alt="'.$row[1].'" style=""></div>
                      <div class="carousel"><img class="imgCarouselNav" src="'.$fileName3.'" alt="'.$row[1].'" style=""></div>
                      <div class="carousel"><img class="imgCarouselNav" src="'.$fileName4.'" alt="'.$row[1].'" style=""></div>

                    </div>
                  </div>';
                }elseif(file_exists($fileName3)){
                  $output = htmlspecialchars(3);
                echo '<div class="col-md-6"><div id="output" style="display: none;">'.$output.'</div>  <div class="slider-for mw-100">
                      <div class="carousel"><img class="imgCarousel" src="'.$fileName1.'" alt="'.$row[1].'" style=""></div>
                      <div class="carousel"><img class="imgCarousel" src="'.$fileName2.'" alt="'.$row[1].'" style=""></div>
                      <div class="carousel"><img class="imgCarousel" src="'.$fileName3.'" alt="'.$row[1].'" style=""></div>

                    </div>
                    <div class="slider-nav mw-100">
                      <div class="carousel"><img class="imgCarouselNav" src="'.$fileName1.'" alt="'.$row[1].'" style=""></div>
                      <div class="carousel"><img class="imgCarouselNav" src="'.$fileName2.'" alt="'.$row[1].'" style=""></div>
                      <div class="carousel"><img class="imgCarouselNav" src="'.$fileName3.'" alt="'.$row[1].'" style=""></div>


                    </div>
                  </div>';
                }elseif(file_exists($fileName2)){
                  $output = htmlspecialchars(2);
                echo '<div class="col-md-6"><div id="output" style="display: none;">'.$output.'</div>  <div class="slider-for mw-100">
                      <div class="carousel"><img class="imgCarousel" src="'.$fileName1.'" alt="'.$row[1].'" style=""></div>
                      <div class="carousel"><img class="imgCarousel" src="'.$fileName2.'" alt="'.$row[1].'" style=""></div>

                    </div>
                    <div class="slider-nav mw-100">
                      <div class="carousel"><img class="imgCarouselNav" src="'.$fileName1.'" alt="'.$row[1].'" style=""></div>
                      <div class="carousel"><img class="imgCarouselNav" src="'.$fileName2.'" alt="'.$row[1].'" style=""></div>


                    </div>
                  </div>';
                }
                else{
                  echo '<div class="col-md-6">
                  <div class="carousel"><img class="imgCarousel"  src="'.$fileName1.'" alt="'.$row[1].'" style=""></div>
                </div>  ';
                }



          ?>

          <div class="col-md-6">
            <table class="table table table-bordered table table-striped">
              <tbody>
                <tr>
                  <td ><p class="bold mb-0">Item number</p></th>
                  <td ><?php echo $row[0]?></th>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Name</p></td>
                  <td ><?php echo $row[1]?></td>
                </tr>
                <?php
                if(isset($_SESSION['username'])){
                  echo '
                  <tr>
                    <td ><p class="bold mb-0">Brand</p></td>
                    <td >'.ucfirst($row[2]).'</td>
                  </tr>';}
                ?>

                <tr>
                  <td ><p class="bold mb-0">Packing standard</p></td>
                  <td ><?php echo $row[3]?></td>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">MOQ</p></td>
                  <td ><?php echo $row[4]?> cases</td>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Price per</p>
                  </td>
                  <td >
                    <?php
                      if (isset($_SESSION["username"])) {
                        if ($_SESSION["username"]==="Admin"){
                          echo $row[5]. " JPY per " . $row[6];
                        }
                        else{
                            if (!isset($_SESSION['margin'])) {
                                echo "To know price please contact sales representaive";
                            } else {
                                $totalPrice = ((intval($_SESSION['margin'])/100)* intval($row[5])) +intval($row[5]);
                                echo $totalPrice. " JPY per " . $row[6];
                            }
                        }
                      }
                      else{
                        echo "To know price please contact sales representaive";
                      }
                    ?>
                  </td>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Weight </p></td>
                  <td ><?php echo $row[7]?>kg</td>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Shelf life</p></td>
                  <td ><?php echo $row[8]?></td>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Ingredients</p></td>
                  <td ><?php echo $row[9]?></td>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Nutritions</p></td>
                  <td ><?php echo $row[10]?></td>
                </tr>
                <?php
                if (isset($_SESSION['username'])) {
                    echo '                
                  <tr>
                    <td ><p class="bold mb-0">Manufacuter</p></td>
                    <td >'.$row[11].'</td>
                  </tr>';
                }?>

                <tr>
                  <td ><p class="bold mb-0">Type</p></td>
                  <td ><?php echo $row[12]?></td>
                </tr>
                <?php
                if (isset($_SESSION['username'])) {
                    echo '                
                  <tr>
                    <td ><p class="bold mb-0">Supplier</p></td>
                    <td >'.$row[13].'</td>
                  </tr>';
                }                
                ?>
              </tbody>
            </table>
            
          </div>
        </div>

        <div class="d-block m-auto">
          <form style="text-align: center;" action="shopping_cart.php?action=add&id=<?php echo $row[0]; ?>" method="post">
            <input type="number" name="Quantity" placeholder="Quantity" required><span><?php echo $row[6]?></span>
            <input type="hidden" name="Number" value="<?=$row[0]?>">
            <input type="hidden" name="Name" value="<?=$row[1]?>">
            <input type="hidden" name="Price" value="<?=$totalPrice?>">
            <input type="hidden" name="Per" value="<?=$row[6]?>">
            <input type="hidden" name="Supplier" value="<?=$row[13]?>">
            <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success" value="Add to Cart">        
          </form>
      </div>
      <?php

if(isset($_SESSION['username'])){
  if ($_SESSION['username']=='Admin') {
    echo' <div class="d-block m-auto">
    <a style=" margin-top: 10px;" class="btn btn-lg btn-success" href="edit.php?id='.$row[0].'">Edit</a>
    </div>
    <div class="d-block m-auto">
        <a onclick="return confirm(\'Are you sure?\')" style=" margin-top: 10px;" class="btn-lg btn btn-danger" href="inlcudes/deleteItem.inc.php?id='.$row[0].'&action=delete">Delete</a>
    </div>';  }
    }
      ?>
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