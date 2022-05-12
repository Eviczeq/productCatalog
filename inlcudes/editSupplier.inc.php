<?php
    require "dbh.inc.php";
    require "supplier.inc.php";

try {
      
if(isset($_POST['submit'])){
    $id = intval($_POST['id']);
    $name = $_POST['companyName'];
    $contact = $_POST['contactName'];
    $email = $_POST['contactEmail'];
    $sql = "UPDATE `supplier` 
    SET 
    `id` = $id,
    `companyName` = '$name',
    `contactName` = '$contact',
    `contactEmail`='$email'
    WHERE `id` = $id";    
    $result = $conn->prepare($sql);
    $result ->execute();
    echo "<script> window.location='../supplier.php'</script>"

    ;}
    } catch(PDOException $e){
        die("ERROR: Could not able to execute $sql. " . $e->getMessage());
        {
    }
}

?>