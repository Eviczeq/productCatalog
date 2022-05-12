<?php
      // get the info from the db 
      $sql = "SELECT * FROM usermaster";
      $result = $conn->query($sql);
      $clientSql= "SELECT * FROM client";
      $clientResult = $conn->query($clientSql);

      try {
         $countSqlClient = "SELECT COUNT('id') FROM `usermaster`";
         $countResultClient=$conn ->query($countSqlClient);
         $countRowClient = $countResultClient-> fetchColumn();
         $numberRowClient = intval($countRowClient) + 1;
             } catch(PDOException $e){
                 die("ERROR: Could not able to execute $sql. " . $e->getMessage());
             }

     
             if(isset($_GET['action'])){
                if($_GET['action'] == 'edit'){
                    try {
                        $id = htmlspecialchars($_GET['id']);
                        $sql = "SELECT * FROM `usermaster` WHERE id = $id";
                        $result = $conn ->query($sql);
                        $row = $result->fetch(PDO::FETCH_NUM);
                    
                            } catch(PDOException $e){
                        die("ERROR: Could not able to execute $sql. " . $e->getMessage());
                    }
                    
                }
            }
             ?>
