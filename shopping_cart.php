<?php 
  include "header.php";
  include "inlcudes/cart.inc.php";
?>
<section id="main-area">
  <div class="container">
    <div class="row">    
      <div class="side1 col-md-18 order-md-24 mb-5 mb-md-0">
      <!-- Products -->
        <h2 class="ttl-deco h5 mb-3 test1">Shopping Cart</h2>

        <div class="row mb-45px">
          <div class="table-responsive">
            <table  data-cols-width="8,23,11,8,8,8,8,23" id="tblData" class="table-responsive table table table-bordered table table-striped">
              <tr data-height="51">
                <td  data-b-a-s="thin" data-b-a-c="000000" style="display: none; " colspan="7">To:KAIJIN TRADING CO.,LTD.</td>
                <td data-b-a-s="thin" data-b-a-c="000000" data-a-h="right" data-a-v="middle"  style="display: none; " colspan="1"  rowspan="1">Date:<p id="p1" ></p> </td>
              </tr>
              <tr data-height="51">
                <td data-b-a-s="thin" data-b-a-c="000000" style="display: none;" colspan="1">From: </td>
                <td data-b-a-s="thin" data-b-a-c="000000" style="display: none;" colspan="7">
                  <?php if(isset($_SESSION['username'])){echo$_SESSION['username'];}else{echo"please fill";} ?>
                </td>
              </tr>
              <tr data-height="51">
                <td data-b-a-s="thin" data-b-a-c="000000" style="display: none;" colspan="1">Address: </td>
                  
                <td data-a-wrap="true" data-b-a-s="thin" data-b-a-c="000000" style="display: none;" colspan="7">
                  <?php if(isset($_SESSION['username'])){echo$_SESSION['companyDetails'];}else{echo"please fill";} ?></td>
              </tr>
              <tr data-height="157.1">
                <td data-b-a-s="thin" data-b-a-c="000000" style="display: none; text-align:center"   data-a-h="center" data-a-v="middle" colspan="8">Request for quotation</td>
              </tr>
              <thead>   
                <tr >
                  <td data-b-a-s="thin" data-b-a-c="000000" >No</td>
                  <td data-b-a-s="thin" data-b-a-c="000000" data-exclude="true" >Image</td>
                  <td data-b-a-s="thin" data-b-a-c="000000" >Product name</td>
                  <td data-b-a-s="thin" data-b-a-c="000000" >Product Id.</td>
                  <td data-b-a-s="thin" data-b-a-c="000000" >Unit Price</td>
                  <td data-b-a-s="thin" data-b-a-c="000000" >Quantity</td>
                  <td data-b-a-s="thin" data-b-a-c="000000" >Sum</td>
                  <td data-b-a-s="thin" data-b-a-c="000000" data-exclude="true">Delete</td> 
                  <td data-b-a-s="thin" data-b-a-c="000000" data-exclude="true">Update</td> 
                  <td data-b-a-s="thin" data-b-a-c="000000" style="display: none;">Supplier</td>
                  <td data-b-a-s="thin" data-b-a-c="000000" style="display: none;">Notes</td>
                </tr>
              </thead> 
              <tbody>
              <?php 
              if (!empty($_SESSION['username'])) {
                  if (!empty($_SESSION["cart"])) {
                      $total = 0;
                      $total_item=0;
                      $number = 1;
                      foreach ($_SESSION["cart"] as $key => $value) {
                          $subtotal = $value["item_quantity"] * $value["product_price"];
                          $total = $total + ($value["item_quantity"] * $value["product_price"]);
             
                          $total_item= $total_item + $value["item_quantity"];
                          echo('
                      <form style="text-align: center;" action="shopping_cart.php?action=update&id='.$value["product_id"].'" method="post">
                        <tr data-height="50">
                          <td data-t="n" data-b-a-s="thin" data-b-a-c="000000">'.$number.' </td>
                          <td data-b-a-s="thin" data-b-a-c="000000" data-exclude="true" > <img class="d-block w-50 m-auto"src="images/'.$value["product_id"].'.jpg" alt="'.$value["item_name"].'" class="w-50 mb-2 m-auto"></td>
                          <td data-b-a-s="thin" data-b-a-c="000000">'.$value["item_name"].' </td>
                          <td data-t="n" data-b-a-s="thin" data-b-a-c="000000">'.$value["product_id"].' </td>
                          <td data-b-a-s="thin" data-b-a-c="000000">'.number_format($value["product_price"]).'</td>
                          <td data-b-r-c="FFFFOOOO"  data-b-a-s="thin"><p style="display:none;">'.$value["item_quantity"].'</p> <input class="w-50 m-auto" type="text" value="'.$value["item_quantity"].'" name="quantity" ><span>'.$value['per'].'</span></td>
                          <td data-b-a-s="thin" data-b-a-c="000000">'.number_format($subtotal).'</td>
                          <td data-exclude="true"><a class="btn btn-danger" style="width: max-content;" href="shopping_cart.php?action=delete&id='.$value["product_id"].'">Remove Item</a></td>
                          <td data-exclude="true"><input type="submit" name="update"  class="btn btn-success" value="Update Item"></td>     
                          <td data-t="n"  data-b-a-s="thin" data-b-a-c="000000" style="display:none;">'.$value["supplier"].' </td>              
                          <td data-b-a-s="thin" data-b-a-c="000000" style="display:none;"></td>
                        </tr>
                      </form>');
                          $number++;
                      }
                      echo '
                  </tbody>                  
                  <tr data-height="50">
                    <td data-exclude="true"></td>
                    <td data-f-bold="true"	data-a-h="right" data-b-a-s="thin" data-b-a-c="000000" colspan="4" 5tyle="text-align: right; font-weight: bold;">Total</td>
  
                    <td data-f-bold="true"  data-b-a-s="thin" data-b-a-c="000000" colspan="1" style="text-align: center; font-weight: bold;">'.number_format($total).'</td>
                    <td colspan ="2" data-b-a-s="thin" data-b-a-c="000000" colspan="" style="text-align: left; font-weight: bold;"></td>
                  </tr>';
                  } else {
                      echo "<td colspan='9'>Your basket is empty </td>";
                  }
              } else{
                if (!empty($_SESSION["cart"])) {
                  $total = 0;
                  $total_item=0;
                  $number = 1;
                  foreach ($_SESSION["cart"] as $key => $value) {
                      $subtotal = 0;
                      $total = 0;
         
                      $total_item= $total_item + $value["item_quantity"];
                      echo('
                  <form style="text-align: center;" action="shopping_cart.php?action=update&id='.$value["product_id"].'" method="post">
                    <tr data-height="50">
                      <td data-t="n" data-b-a-s="thin" data-b-a-c="000000">'.$number.' </td>
                      <td data-b-a-s="thin" data-b-a-c="000000" data-exclude="true" > <img class="d-block w-50 m-auto"src="images/'.$value["product_id"].'.jpg" alt="'.$value["item_name"].'" class="w-50 mb-2 m-auto"></td>
                      <td data-b-a-s="thin" data-b-a-c="000000">'.$value["item_name"].' </td>
                      <td data-t="n" data-b-a-s="thin" data-b-a-c="000000">'.$value["product_id"].' </td>
                      <td data-b-a-s="thin" data-b-a-c="000000">To know price please contact sales representaive</td>
                      <td data-b-r-c="FFFFOOOO"  data-b-a-s="thin"><p style="display:none;">'.$value["item_quantity"].'</p> <input class="w-50 m-auto" type="text" value="'.$value["item_quantity"].'" name="quantity" >'.$value['per'].'</td>
                      <td data-b-a-s="thin" data-b-a-c="000000">'.number_format($subtotal).'</td>
                      <td data-exclude="true"><a class="btn btn-danger" style="width: max-content;" href="shopping_cart.php?action=delete&id='.$value["product_id"].'">Remove Item</a></td>
                      <td data-exclude="true"><input type="submit" name="update"  class="btn btn-success" value="Update Item"></td>     
                      <td data-t="n"  data-b-a-s="thin" data-b-a-c="000000" style="display:none;">'.$value["supplier"].' </td>              
                      <td data-b-a-s="thin" data-b-a-c="000000" style="display:none;"></td>
                    </tr>
                  </form>');
                      $number++;
                  }
                  echo '
              </tbody>                  
              <tr data-height="50">
                <td data-exclude="true"></td>
                <td data-f-bold="true"	data-a-h="right" data-b-a-s="thin" data-b-a-c="000000" colspan="5" style="text-align: right; font-weight: bold;">Total</td>
                <td data-f-bold="true"  data-b-a-s="thin" data-b-a-c="000000" colspan="1" style="text-align: center; font-weight: bold;">'.number_format($total).'</td>
                <td colspan ="2" data-b-a-s="thin" data-b-a-c="000000" colspan="" style="text-align: left; font-weight: bold;"></td>
              </tr>';
              } else {
                  echo "<td colspan='9'>Your basket is empty </td>";
              }
              }
              ?>
              <tr style="display: none;" ></tr>
              <tr >
                <td  style="display: none;" >
                  <p class="m-3">Send excel file to one of our sales representative.</p>
                  <ul >
                    <li class="m-3">
                      teamexport@kaijin.co.jp
                    </li>
                  </ul>
                </td>
              </tr>
            </table> 
          </div>
          <div class="row">
            <div class="col">
              <button  class="btn btn-success"  id="button-excel">Export Table Data To Excel File</button>
              <form style="display: inline-flex; float: right;" action="" method="post">
                <button  class="btn btn-danger" onclick="return confirm('Are you sure?')" type="submit" name="deleteAll" >Delete all</button>
              </form>
              <p class="m-3">Send excel file to our sales representative.</p>
              <ul>
                <li class="m-3">
                  <a class="nav-link" href="mailto: teamexport@kaijin.co.jp">teamexport@kaijin.co.jp</a>
                </li>
              </ul>
            </div>
          </div>  
        </div>    
      </div>
      <?php
      include 'sidebar.php'
      ?>  
    </div><!-- row -->
  </div>
</section>
<script>
  var today = new Date();
  var dd = String(today.getDate()).padStart(2, '0');
  var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
  var yyyy = today.getFullYear();
  today = mm + '/' + dd + '/' + yyyy;
  const d = new Date(today);
  document.getElementById("p1").innerHTML = today;
</script>
        <!-- export table -->
<script>
  let button = document.querySelector("#button-excel");
  button.addEventListener("click", e => {
    let table = document.querySelector("#tblData");
    TableToExcel.convert(table);});
</script>
<?php
    require "footer.php";

    ?>