<?php
    require 'dbh.inc.php';
    try{
    if(isset($_REQUEST["term"])){
        // create prepared statement
        $sql = "SELECT * FROM placeholder WHERE Name LIKE :term LIMIT 10";
        $stmt = $conn->prepare($sql);
        $term = '%' . $_REQUEST["term"] . '%';
        // bind parameters to statement
        $stmt->bindParam(":term", $term);
        // execute the prepared statement
        $stmt->execute();
        if($stmt->rowCount() > 0){
            while($row = $stmt->fetch()){
                echo "<a class='text-decoration-none' href='item.php?id=".$row["Number"]."'>" . $row["Name"] ."</a><br>";
            }
        } else{
            echo "<p>No matches found</p>";
        }
    }  
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
 
// Close statement
unset($stmt);
 
// Close connection
unset($pdo);
?>


