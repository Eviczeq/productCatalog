<?php
    require "header.php";
    require "inlcudes/supplier.inc.php";
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
        <h2 class="ttl-deco h5 mb-3">Suppliers</h2>
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>            
                        <th>Id</th>
                        <th>Company Name</th>
                        <th>Contact Name</th>
                        <th>Contact details</th>
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
                                    echo '<td>'.$row[3].'</td>';
                                    echo '<td><a class="btn btn-danger" style="width: max-content;" href="inlcudes/deleteSupplier.inc.php?action=delete&id='.$row[0].'">Remove Item</a></td>';
                                    echo '<td><a class="btn btn-info" style="width: max-content;" href="editSupplier.php?action=edit&id='.$row[0].'">Edit Item</a></td>';

                                    echo "</tr>";
                                }
                            }// end while
                        ?>
                </tbody>
            </table>
<div class="">
    <a class="btn btn-lg btn-success" href="addSupplier.php">Add new supplier</a>
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

