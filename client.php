<?php
    require "header.php";
    require "inlcudes/client.inc.php";
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
        <h2 class="ttl-deco h5 mb-3">Clients</h2>
        <div style="overflow-x: auto;">
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>            
                        <th>Id</th>
                        <th>Client Id</th>
                        <th>Contact Name</th>
                        <th>Company Name</th>
                        <th>Company Address</th>
                        <th>Company Phone</th>
                        <th>Company Email</th>
                        <th >Company Bilans</th>
                        <th >Margin</th>
                        <th></th>
                        <th></th>


                    </tr>
                </thead>
                <tbody>
                        <?php
                            while ($list = $result->fetchAll()) {
                                foreach ($list as $row) {
                                    $money=intval($row[7]);
                                    $colorTxt;
                                    if($money<0){
                                        $colorTxt="color:red; font-weight:bold;";
                                    }elseif($money > 0){
                                        $colorTxt="color:green; font-weight:bold;";
                                    };
                                    echo " <tr>";
                                    echo '<td>'.$row[0].'</td>';
                                    echo '<td>'.$row[1].'</td>';
                                    echo '<td>'.$row[2].'</td>';
                                    echo '<td>'.$row[3].'</td>';
                                    echo '<td>'.$row[4].'</td>';
                                    echo '<td >'.$row[5].'</td>';
                                    echo '<td>'.$row[6].'</td>';
                                    echo '<td style="'.$colorTxt.'">'.number_format($money).'JPY</td>';
                                    echo '<td style="font-weight:bold;">'.$row[8].'%</td>';
                                    echo '<td><a class="btn btn-danger" style="width: max-content;" href="inlcudes/deleteClient.inc.php?action=delete&id='.$row[0].'">Remove Item</a></td>';
                                    echo '<td><a class="btn btn-info" style="width: max-content;" href="editClient.php?action=edit&id='.$row[0].'">Edit Item</a></td>';
                                    echo "</tr>";
                                }
                            }// end while
                        ?>
                </tbody>
            </table>
            </div>
<div class="">
    <a class="btn btn-lg btn-success" href="addClient.php">Add new client</a>
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

