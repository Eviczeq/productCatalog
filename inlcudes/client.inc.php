<?php
    if(isset($_GET['action'])){
        if($_GET['action'] == 'edit'){
            try {
                $id = htmlspecialchars($_GET['id']);
                $sql = "SELECT * FROM `client` WHERE id = $id";
                $result = $conn ->query($sql);
                $row = $result->fetch(PDO::FETCH_NUM);
            
                    } catch(PDOException $e){
                die("ERROR: Could not able to execute $sql. " . $e->getMessage());
            }
            
        }
    }
      // get the info from the db 
      $sql = "SELECT * FROM client";
      $result = $conn->query($sql);
      $columnStmt = $conn->prepare("DESCRIBE client");
      $columnStmt -> execute();

      try {
         $countSqlClient = "SELECT COUNT('id') FROM `client`";
         $countResultClient=$conn ->query($countSqlClient);
         $countRowClient = $countResultClient-> fetchColumn();
         $numberRowClient = intval($countRowClient) + 1;
             } catch(PDOException $e){
                 die("ERROR: Could not able to execute $sql. " . $e->getMessage());
             }

     

             ?>
