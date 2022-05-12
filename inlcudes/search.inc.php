<?php
    require 'dbh.inc.php';
    try{
        if(isset($_POST["text"])){
            // create prepared statement
            $sql = "SELECT * FROM placeholder WHERE Name LIKE :text";
            $stmt = $conn->prepare($sql);
            $text = '%' . $_POST["text"] . '%';
            // bind parameters to statement
            $stmt->bindParam(":text", $text);
            // execute the prepared statement
            $stmt->execute();

        }  
    } catch(PDOException $e){
        die("ERROR: Could not able to execute $sql. " . $e->getMessage());
    }

    

?>