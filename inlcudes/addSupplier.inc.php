<?php
    require "dbh.inc.php";

    try {

if (isset($_POST['submit'])) {
    $id = $_POST["id"];
    $companyName =$_POST["companyName"];
    $contactName =$_POST["contactName"] ;
    $contactEmail =$_POST["contactEmail"];
    $sql = "INSERT INTO `supplier`
        (
        `id`, 
        `companyName`, 
        `contactName`, 
        `contactEmail`
       ) VALUES (
        '$id',
        '$companyName',
        '$contactName',
        '$contactEmail'
        )";

    $stmt= $conn->prepare($sql);
    $stmt -> execute();

    $message = "Product added to the database";

    echo "<script type='text/javascript'>alert('$message');</script>";

    echo '<script>window.location="../supplier.php"</script>';
    

}

}
catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}



?>
