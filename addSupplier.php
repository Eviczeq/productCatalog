<?php
    require "header.php";
    require "inlcudes/dbh.inc.php";
    require "inlcudes/supplier.inc.php";
    if(!isset($_SESSION['username']) || $_SESSION['username'] !='Admin'){
      echo '<script>window.location="index.php"</script>';
      die();
  }
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
            <table class="table table table-bordered table table-striped">
            <form action="inlcudes/addSupplier.inc.php" method="POST">
              <tbody>
                <tr>
                  <td ><p class="bold mb-0">Supplier number</p></th>
                  <td ><input readonly  type="number" name="id" id="" value="<?php echo $numberRowSupplier?>"></th>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Company name</p></td>
                  <td ><input type="text" name="companyName" id="" value=""></td>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Contact name</p></td>
                  <td ><input type="text" name="contactName" id="" value=""></td>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Contact</p></td>
                  <td ><input  type="text" name="contactEmail" id="" value=""></td>
                </tr>
              </tbody>
            </table>
            
          </div>

        </div>

      <div class="d-block m-auto">
         <input style="width: -webkit-fill-available;" onclick="return confirm('Are you sure?')"  type="submit" class="btn btn-success" value="submit" name="submit">
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