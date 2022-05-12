<?php
    require "header.php";
    require "inlcudes/users.inc.php";
    if(!isset($_SESSION['username'])){
      echo '<script>window.location="index.php"</script>';
      die();
  }
    ?>
<section id="main-area">
  <div class="container">
    <div class="row">    
      <div class="side1 col-md-18 order-md-24 mb-5 mb-md-0">

      <!-- Suppliers -->
        <h2 class="ttl-deco h5 mb-3">Accounts</h2>
        <div style="overflow-x: auto;">
            <table id="example" class="display" >
                <thead>
                    <tr>            
                        <th>Id</th>
                        <th>Client Id</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Contact Email</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                        <?php
                            while ($list = $result->fetchAll()) {
                                foreach ($list as $row) {
  
                                    echo " <tr>";
                                    echo '<td>'.$row[0].'</td>';
                                    echo '<td>'.$row[1].'</td>';
                                    echo '<td>'.$row[2].'</td>';
                                    echo '<td>***</td>';
                                    echo '<td >'.$row[5].'</td>';
                                    echo '<td><a class="btn btn-danger" style="width: max-content;" href="inlcudes/deleteUser.inc.php?action=delete&id='.$row[0].'">Delete user</a></td>';
                                    echo '<td><a class="btn btn-info" style="width: max-content;" href="editUser.php?action=edit&id='.$row[0].'">Edit User</a></td>';

                                    echo "</tr>";
                                }
                            }// end while
                        ?>
                </tbody>
            </table>
            </div>
<div class="">
    <a class="btn btn-lg btn-success" href="singup.php">Create an account</a>
</div>
      <!-- Suppliers -->
      </div>
      <?php
      include 'sidebar.php'
      ?>  
    </div>
  </div>
</section>

<?php
    require "footer.php";

    ?>

