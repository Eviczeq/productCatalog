<?php
    require "dbh.inc.php";




    try {

if (isset($_POST['submit'])) {
    $number = $numberRow;
    $name =$_POST["name"];
    $brand =$_POST["brand"];
    $packing =$_POST["packing"] ;
    $moq =$_POST["moq"];
    $price = $_POST["price"] ;
    $per =$_POST["price"];
    $weight =$_POST["weight"] ;
    $shelf =$_POST["shelf"] ;
    $ingredients = $_POST["ingredients"] ;
    $nutritions =$_POST["nutritions"] ;
    $manufacture =$_POST["manufacture"] ;
    $type =$_POST["type"];
    $supplier =$_POST["supplier"];
    $category =$_POST["category"];    
    $sql = "INSERT INTO `placeholder`
        (
        `Number`, 
        `Name`, 
        `Brand`, 
        `Packing standard`, 
        `MOQ`, 
        `Price`, 
        `Price per`, 
        `Weight`, 
        `Shelf life`, 
        `Ingredients`, 
        `Nutritions`, 
        `Manufacturer`, 
        `Type`, 
        `Supplier`, 
        `Category`
        ) VALUES (
        '$number',
        '$name',
        '$brand',
        '$packing',
        '$moq',
        '$price',
        '$per',
        '$weight',
        '$shelf',
        '$ingredients',
        '$nutritions',
        '$manufacture',
        '$type',
        '$supplier',
        '$category')";

    $stmt= $conn->prepare($sql);
    $stmt -> execute();

    $message = "Product added to the database";

    echo "<script type='text/javascript'>alert('$message');</script>";

    echo '<script>window.location="../create.php"</script>';
    

}

}
catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}



//Upload image
$target_dir = "../images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submitImg"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    $uploadOk = 1;
  } else {
    $message = "File is not an image";
    echo "<script type='text/javascript'>alert('$message');</script>";
    $uploadOk = 0;
    echo '<script>window.location="../create.php"</script>';

  }
}

// Check if file already exists
if (file_exists($target_file)) {
  $message = "File is already exist";
  echo "<script type='text/javascript'>alert('$message');</script>";
  $uploadOk = 0;
  echo '<script>window.location="../create.php"</script>';
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  $message = "File size is too large";
  echo "<script type='text/javascript'>alert('$message');</script>";
  $uploadOk = 0;
  echo '<script>window.location="../create.php"</script>';
}

// Allow certain file formats
if($imageFileType != "jpg") {
  $message = "File is not an JPG";
  echo "<script type='text/javascript'>alert('$message');</script>";
  $uploadOk = 0;
  echo '<script>window.location="../create.php"</script>';
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  $message = "File is not uploaded";
  echo "<script type='text/javascript'>alert('$message');</script>";
  echo '<script>window.location="../create.php"</script>';// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    $message = "File was uploaded";
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo '<script>window.location="../index.php"</script>';

  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>