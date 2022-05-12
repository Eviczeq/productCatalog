<?php
    require "dbh.inc.php";

    try {

if (isset($_POST['submit'])) {
    $id = $_POST["id"];
    $clientId = $_POST["clientId"];
    $clientName = $_POST["clientName"];
    $companyName =$_POST["companyName"];
    $companyAddress =$_POST["companyAddress"];
    $companyPhone =$_POST["companyPhone"];
    $companyEmail =$_POST["companyEmail"];
    $companyBilans =$_POST["companyBilans"];
    $margin =$_POST["margin"];
    $sql = "INSERT INTO `client`
        (
            `id`,`clientId`, `personName`, `companyName`, `companyAddress`, `companyPhone`, `companyEmail`, `companyBilans`,`margin`
       ) VALUES (
        '$id',
        '$clientId',
        '$clientName',
        '$companyName',
        '$companyAddress',
        '$companyPhone',
        '$companyEmail',
        '$companyBilans',
        '$margin'


        )";

    $stmt= $conn->prepare($sql);
    $stmt -> execute();

    $message = "Client added to the database";

    echo "<script type='text/javascript'>alert('$message');</script>";

   echo '<script>window.location="../client.php"</script>';
    

}

}
catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}



?>
