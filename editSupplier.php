<?php
    require "header.php";
    require "inlcudes/dbh.inc.php";
    require "inlcudes/supplier.inc.php";
    require "inlcudes/editSupplier.inc.php";

    if(!isset($_SESSION['username']) || $_SESSION['username'] !='Admin'){
      echo '<script>window.location="index.php"</script>';
      die();
  }
    ?>
<!-- -->
<section id="main-area">
  <div class="container">
    <div class="row">    
      <div class="side1 col-md-18 order-md-24 mb-5 mb-md-0">

      <!-- Products -->
        <h2 class="ttl-deco h5 mb-3">Supplier</h2>

          <div class="col-md-18">
            <table class="table table table-bordered table table-striped w-100">
            <form action="inlcudes/editSupplier.inc.php" method="POST">
              <tbody>
                <tr >
                  <td class="w-25"><p class="bold mb-0">Supplier number</p></th>
                  <td ><input class="w-100"  type="number" name="id" id="" value="<?php echo $row[0]?>"></th>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Company name</p></td>
                  <td ><input class="w-100" type="text" name="companyName" id="" value="<?php echo $row[1]?>"></td>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Contact name</p></td>
                  <td ><input class="w-100" type="text" name="contactName" id="" value="<?php echo $row[2]?>"></td>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Contact</p></td>
                  <td ><input class="w-100" style="height: 5rem;" type="text" name="contactEmail" id="" value="<?php echo $row[3]?>"></td>
                </tr>
              </tbody>
            </table>

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