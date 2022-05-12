<?php
    require "header.php";
    if(!isset($_SESSION['username']) || $_SESSION['username'] !='Admin'){
      echo '<script>window.location="index.php"</script>';
        }
    require "inlcudes/product.inc.php";
    require "inlcudes/edit.inc.php";



    ?>
<!-- ADD SQL part for update plus admin login plus add new item. Later add photos from trip. adn new fish rpducts-->
<section id="main-area">
  <div class="container">
    <div class="row">    
      <div class="side1 col-md-18 order-md-24 mb-5 mb-md-0">

      <!-- Products -->
        <h2 class="ttl-deco h5 mb-3">Product</h2>
        <div class="row mb-45px">
          <div class="col-md-6 d-flex">
            <img src="images/<?php echo $row[0]?>.jpg" alt="<?php echo $row[1]?>" style="margin: auto; width:80%; height:80%;">
          </div>
          <div class="col-md-6">
            <table class="table table table-bordered table table-striped">
            <form action="inlcudes/edit.inc.php?id=<?php echo $row[0]; ?>" method="POST">
              <tbody>
                <tr>
                  <td ><p class="bold mb-0">Item number</p></th>
                  <td ><input disabled type="text" name="number" id="" value="<?php echo $row[0]?>"></th>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Name</p></td>
                  <td ><input type="text" name="name" id="" value="<?php echo $row[1]?>"></td>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Brand</p></td>
                  <td ><input type="text" name="brand" id="" value="<?php echo ucfirst($row[2])?>"></td>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Packing standard</p></td>
                  <td ><input type="text" name="packing" id="" value="<?php echo $row[3]?>"></td>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">MOQ</p></td>
                  <td ><input type="text" name="moq" id="" value="<?php echo $row[4]?>">cases</td>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Price per</p>
                  </td>
                  <td ><input type="text" name="price" id="" value="<?php echo $row[5]?>">円 per <input type="text" name="per" id="" value="<?php echo $row[6]?>"></td>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Weight </p></td>
                  <td ><input type="text" name="weight" id="" value="<?php echo $row[7]?>">kg</td>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Shelf life</p></td>
                  <td ><input type="text" name="shelf" id="" value="<?php echo $row[8]?>"></td>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Ingredients</p></td>
                  <td ><input type="text" name="ingredients" id="" value="<?php echo $row[9]?>"></td>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Nutritions</p></td>
                  <td ><input type="text" name="nutritions" id="" value="<?php echo $row[10]?>"></td>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Manufacture</p></td>
                  <td ><input type="text" name="manufacture" id="" value="<?php echo $row[11]?>"></td>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Type</p></td>
                  <td ><input type="text" name="type" id="" value="<?php echo $row[12]?>"></td>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Supplier</p></td>
                  <td ><input type="text" name="supplier" id="" value="<?php echo $row[13]?>"></td>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Category</p></td>
                  <td ><input type="text" name="category" id="" value="<?php echo $row[14]?>"></td>
                </tr>
              </tbody>
            </table>
            
          </div>

        </div>

      <div class="d-block m-auto">
         <input onclick="return confirm('Are you sure?')"  type="submit" class="btn btn-success" value="submit" name="submit">
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