<?php
    require "header.php";
    require "inlcudes/dbh.inc.php";
    require "inlcudes/client.inc.php";
    require "inlcudes/editClient.inc.php";

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
        <h2 class="ttl-deco h5 mb-3">Client</h2>

          <div class="col-md-18">
            <table class="table table table-bordered table table-striped w-100">
            <form action="inlcudes/editClient.inc.php" method="POST">
              <tbody>
                <tr >
                  <td class="w-25"><p class="bold mb-0">Id</p></th>
                  <td ><input readonly class="w-100"  type="number" name="id" id="" value="<?php echo $row[0]?>"></th>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Client id</p></td>
                  <td ><input class="w-100" type="text" name="clientId" id="" value="<?php echo $row[1]?>"></td>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Client name</p></td>
                  <td ><input class="w-100" type="text" name="clientName" id="" value="<?php echo $row[2]?>"></td>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Company name</p></td>
                  <td ><input class="w-100" type="text" name="companyName" id="" value="<?php echo $row[3]?>"></td>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Company Address</p></td>
                  <td ><textarea class="w-100" type="text" name="companyAddress" id="" ><?php echo $row[4]?></textarea></td>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Company Phone</p></td>
                  <td ><input class="w-100" type="text" name="companyPhone" id="" value="<?php echo $row[5]?>"></td>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Company email</p></td>
                  <td ><input class="w-100" type="text" name="companyEmail" id="" value="<?php echo $row[6]?>"></td>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Company bilans</p></td>
                  <td ><input class="w-100" type="number" name="companyBilans" id="" value="<?php echo $row[7]?>"></td>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">margin</p></td>
                  <td ><input class="w-100" type="number" name="margin" id="" value="<?php echo $row[8]?>"></td>
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