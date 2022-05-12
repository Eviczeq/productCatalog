<?php
    if(isset($_GET['action'])){
        if($_GET['action'] == 'edit'){
            try {
                $id = htmlspecialchars($_GET['id']);
                $sql = "SELECT * FROM `supplier` WHERE id = $id";
                $result = $conn ->query($sql);
                $row = $result->fetch(PDO::FETCH_NUM);
            
                    } catch(PDOException $e){
                die("ERROR: Could not able to execute $sql. " . $e->getMessage());
            }
            
        }
    }
      // get the info from the db 
      $sql = "SELECT * FROM supplier";
      $result = $conn->query($sql);

      try {
         $countSqlSupplier = "SELECT COUNT('id') FROM `supplier`";
         $countResultSupplier=$conn ->query($countSqlSupplier);
         $countRowSupplier = $countResultSupplier-> fetchColumn();
         $numberRowSupplier = intval($countRowSupplier) + 1;
             } catch(PDOException $e){
                 die("ERROR: Could not able to execute $sql. " . $e->getMessage());
             }
       ?>
