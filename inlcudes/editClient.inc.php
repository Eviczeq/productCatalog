<?php
    require "dbh.inc.php";
    require "client.inc.php";

try {
      
if(isset($_POST['submit'])){
    $id = intval($_POST['id']);
    $clientId = $_POST["clientId"];
    $clientName = $_POST["clientName"];
    $companyName = $_POST["companyName"];
    $companyAddress = $_POST["companyAddress"];
    $companyPhone = $_POST["companyPhone"];
    $companyEmail = $_POST["companyEmail"];
    $companyBilans = $_POST["companyBilans"];
    $margin =$_POST["margin"];

    $sql = "UPDATE `client` 
    SET 
    `id`= $id, 
    `clientId`= $clientId, 
    `personName` = '$clientName', 
    `companyName` = '$companyName', 
    `companyAddress` = '$companyAddress', 
    `companyPhone` ='$companyPhone', 
    `companyEmail` = '$companyEmail', 
    `companyBilans` = '$companyBilans',
    `margin` = '$margin'

    WHERE `id` = $id";    
    $result = $conn->prepare($sql);
    $result ->execute();
    echo "<script> window.alert('Client was updated')</script>";
    echo "<script> window.location='../client.php'</script>"

    ;}
    } catch(PDOException $e){
        die("ERROR: Could not able to execute $sql. " . $e->getMessage());
        {
    }
}

?>
