<?php
    require "header.php";
    require "inlcudes/dbh.inc.php";
    require "inlcudes/users.inc.php";
    ?>
<section id="main-area">
  <div class="container">
    <div class="row">    
      <div class="side1 col-md-18 order-md-24 mb-5 mb-md-0">

      <!-- Products -->
        <h2 class="ttl-deco h5 mb-3">Create an account</h2>
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

                 foreach ($list as $row) {
                  echo '<tr><td>'. $row[1].'</td><td>'. $row[2].'</td><td>'. $row[3].'</td></tr>';
              }
                 
                ?>
            </tbody>
          </table>
          </div>
          <div class="col-md-4 m-auto d-inline-block">

            <table class="table table table-bordered table table-striped">
            <form autocomplete="nope" action="inlcudes/addUser.inc.php" method="POST">
              <tbody>
                <input hidden  type="number" name="id" id="" value="<?php echo $numberRowClient?>">
               
                <tr>
                  <td ><p class="bold mb-0">Username</p></td>
                  <td ><input autocomplete="nope" required  type="text" name="userName" id="" value=""></td>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Password</p></td>
                  <td ><input required  type="password" name="password" id="" value=""></td>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Company details</p></td>
                  <td ><input required type="text" name="companyDetails" id="" value=""></td>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Email</p></td>
                  <td ><input required type="text" name="email" id="" value=""></td>
                </tr>
                <tr>
                  <td ><p class="bold mb-0">Client Id</p></td>
                  <td ><input required type="text" name="clientId" id="" value=""></td>
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