<?php
    require "header.php";
    require "inlcudes/dbh.inc.php";
    require "inlcudes/users.inc.php";
    require "inlcudes/editUser.inc.php";

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
        <h2 class="ttl-deco h5 mb-3">User</h2>

        <div class="row mb-45px d-block">

          <div class="col-md-6 m-auto d-inline-block" style="float: left;">
          <table class="table table table-bordered table table-striped">
            <thead>
              <th>Client ID</th>
              <th>Client name</th>
              <th>Company name</th>
            </thead>
            <tbody>
            <?php
              $list = $clientResult->fetchAll();

                 foreach ($list as $rowClient) {
                  echo '<tr><td>'. $rowClient[1].'</td><td>'. $rowClient[2].'</td><td>'. $rowClient[3].'</td></tr>'; 
              }
                
                ?>
            </tbody>
          </table>
          </div>
          <div class="col-md-4 m-auto d-inline-block">

            <table class="table table table-bordered table table-striped">
            <form autocomplete="nope" action="inlcudes/editUser.inc.php" method="POST">
              <tbody>
                    
                    <input hidden  type="number" name="id" id=""  value="<?php echo $row[0]?>">
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Client Id</p></td>
                  <td ><input autocomplete="nope" required  type="number" name="clientId" id=""  value="<?php echo $row[1]?>"></td>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Username</p></td>
                  <td ><input autocomplete="nope" required  type="text" name="userName" id=""  value="<?php echo $row[2]?>"></td>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Password</p></td>
                  <td ><input required  type="password" name="password" id=""  value="Password"></td>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Company details</p></td>
                  <td ><input required type="text" name="companyDetails" id=""  value="<?php echo $row[4]?>"></td>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Email</p></td>
                  <td ><input required type="text" name="email" id=""  value="<?php echo $row[5]?>"></td>
                </tr>


              </tbody>
            </table>
            
          </div>

        </div>
      <div class="d-block m-auto">
         <input style="width: -webkit-fill-available;" onclick="return confirm('Are you sure?')"  type="submit" class="btn btn-success" value="Edit" name="submit">
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