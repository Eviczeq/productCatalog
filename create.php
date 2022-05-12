<?php

    require "header.php";
    require "inlcudes/dbh.inc.php";
    if(!isset($_SESSION['username']) || $_SESSION['username'] !='Admin'){

      echo '<script>window.location="index.php"</script>';
  }
  require "inlcudes/supplier.inc.php";

    ?>
<!-- ADD SQL part for update plus admin login plus add new item. Later add photos from trip. adn new fish rpducts-->
<section id="main-area">
  <div class="container">
    <div class="row">    
      <div class="side1 col-md-18 order-md-24 mb-5 mb-md-0">

      <!-- Products -->
        <h2 class="ttl-deco h5 mb-3">Product</h2>
        <div class="row mb-45px">
          <div class="col-md-6">
            <form class="mb-5" action="inlcudes/add.inc.php" method="post" enctype="multipart/form-data">
              <span>Image to upload: <br></span>
              <span>*Image name must be same as Item number. <br></span>
              <span>*Only jpg allowed.<br></span>
              <span>*To add more photos of same product use item name and add .1 up to .4<br>
              Example 155.jpg 155.1.jpg 155.2.jpg 155.3.jpg 155.4.jpg <br></span>
              <input type="file" name="fileToUpload" id="fileToUpload">
              <input type="submit" value="Upload Image" name="submitImg">
            </form>

            <p style="margin-top: 22rem;">
              Suplier list:
             <br>
              <?php
              $list = $result->fetchAll();

                 foreach ($list as $row) {
                  echo $row[0].'. '. $row[1].'<br>';
              }
                 
                ?>
              
            </p>
          </div>
          <div class="col-md-6">
            <table class="table table table-bordered table table-striped">
            <form action="inlcudes/add.inc.php" method="POST">
              <tbody>
                <tr>
                  <td ><p class="bold mb-0">Item number</p></th>
                  <td ><input readonly  type="text" name="number" id="" value="<?php echo $numberRow?>"></th>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Name</p></td>
                  <td ><input required type="text" name="name" id="" value=""></td>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Brand</p></td>
                  <td ><input required type="text" name="brand" id="" value=""></td>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Packing standard</p></td>
                  <td ><input required type="text" name="packing" id="" value=""></td>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">MOQ</p></td>
                  <td ><input required type="text" name="moq" id="" value="">cases</td>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Price per</p>
                    <p style="font-size: 0.5rem;"><br>*Please note that the price may vary from given. 
                    <br>For exact price please contact sales representaive.
                    </p>
                  </td>
                  <td ><input required type="text" name="price" id="" value="">円 per <input type="text" name="per" id="" value=""></td>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Weight </p></td>
                  <td ><input required type="text" name="weight" id="" value="">kg</td>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Shelf life</p></td>
                  <td ><input required type="text" name="shelf" id="" value=""></td>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Ingredients</p></td>
                  <td ><input required type="text" name="ingredients" id="" value=""></td>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Nutritions</p></td>
                  <td ><input required type="text" name="nutritions" id="" value=""></td>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Manufacture</p></td>
                  <td ><input required type="text" name="manufacture" id="" value=""></td>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Type</p></td>
                  <td ><input required type="text" name="type" id="" value=""></td>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Supplier. </p><small>*Chose number from list on the left</small></td>
                  <td > <select required name="supplier" id="">
                      <?php
                          foreach ($list as $row) {
                              echo '<option value="'.$row[0].'">'.$row[0].'</option>';
                          }
                      
                      
                            
                        ?>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Category</p></td>
                  <td ><input required type="text" name="category" id="" value=""></td>
                </tr>
              </tbody>
            </table>
          </div>

        </div>

      <div class="d-block m-auto">
         <input style="width: -webkit-fill-available;"   type="submit" class="btn btn-success" value="submit" name="submit">
      </div>
      </form>

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