<?php
    require "header.php";
    require "inlcudes/dbh.inc.php";
    require "inlcudes/client.inc.php";
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
        <h2 class="ttl-deco h5 mb-3">Clients</h2>
        <div class="row mb-45px d-block">

          <div class="col-md-6 m-auto">
          <table class="table table table-bordered table table-striped">
            <thead>
              <th>Client ID</th>
              <th>Client name</th>
              <th>Company name</th>
            </thead>
            <tbody>
            <?php
              $list = $result->fetchAll();

                 foreach ($list as $row) {
                  echo '<tr><td>'. $row[1].'</td><td>'. $row[2].'</td><td>'. $row[3].'</td></tr>';
              }
                 
                ?>
            </tbody>
          </table>
            <table class="table table table-bordered table table-striped">
            <form action="inlcudes/addClient.inc.php" method="POST">
              <tbody>
                <tr>
                  <td ><p class="bold mb-0">Number</p></th>
                  <td ><input readonly  type="number" name="id" id="" value="<?php echo $numberRowClient?>"></th>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Client id</p></td>
                  <td ><input type="number" name="clientId" id="" value=""></td>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Client name</p></td>
                  <td ><input type="text" name="clientName" id="" value=""></td>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Company name</p></td>
                  <td ><input type="text" name="companyName" id="" value=""></td>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Company Address</p></td>
                  <td ><input  type="text" name="companyAddress" id="" value=""></td>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Company Phone</p></td>
                  <td ><input  type="text" name="companyPhone" id="" value=""></td>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Company email</p></td>
                  <td ><input  type="text" name="companyEmail" id="" value=""></td>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Company bilans</p></td>
                  <td ><input  type="number" name="companyBilans" id="" value=""></td>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">margin</p></td>
                  <td ><input  type="number" name="margin" id="" value=""></td>
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