<?php
    require "dbh.inc.php";
    require "product.inc.php";


try {
    if (isset($_POST['submit'])) {

        $number = intval($row[0]);
        $name =$_POST["name"];
        $brand =$_POST["brand"];
        $packing =$_POST["packing"] ;
        $moq =$_POST["moq"];
        $price = $_POST["price"] ;
        $per =$_POST["per"];
        $weight =$_POST["weight"] ;
        $shelf =$_POST["shelf"] ;
        $ingredients = $_POST["ingredients"] ;
        $nutritions =$_POST["nutritions"] ;
        $manufacture =$_POST["manufacture"] ;
        $type =$_POST["type"];
        $supplier =$_POST["supplier"];
        $category =$_POST["category"];    
        $sqlUpdate = "UPDATE `placeholder` SET 
        `Number`='$number',
        `Name`='$name',
        `Brand`='$brand',
        `Packing standard`='$packing',
        `MOQ`='$moq',
        `Price`='$price',
        `Price per`='$per',
        `Weight`='$weight',
        `Shelf life`='$shelf',
        `Ingredients`='$ingredients',
        `Nutritions`='$nutritions',
        `Manufacturer`='$manufacture',
        `Type`='$type',
        `Supplier`='$supplier',
        `Category`='$category'
        WHERE Number = '$number'";

          $stmt = $conn ->prepare($sqlUpdate);
        $stmt ->execute();     
        echo '<script>window.location="../product.php"</script>';
    
    }
    } catch(PDOException $e){
        die("ERROR: Could not able to execute $sql. " . $e->getMessage());
        {
    }
}







?>