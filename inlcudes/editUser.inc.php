<?php
    require "dbh.inc.php";
    require "users.inc.php";
    $sqlTest = "SELECT `clientId` FROM `usermaster`";
    $resultTest = $conn->query($sqlTest);
    $test = $resultTest-> fetchAll(PDO::FETCH_COLUMN);
    try {
        if (isset($_POST['submit'])) {
            
            $id = $_POST["id"];
            $clientId = $_POST["clientId"];
            $userName = $_POST["userName"];
            $password = $_POST["password"];
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $companyDetails =$_POST["companyDetails"];
            $email =$_POST["email"];
            $sql = "UPDATE `usermaster` SET `id` = $id, 
            `clientId` = $clientId,
            `username` = '$userName',
            `password` = '$hashedPassword',
            `companyDetails` = '$companyDetails', 
            `email`='$email'
                    WHERE `id` = $id";    
           
                $stmt= $conn->prepare($sql);
                $stmt -> execute();
                $message = "User added to the database";
                echo "<script type='text/javascript'>alert('$message');</script>";
                echo '<script>window.location="../index.php"</script>';
        }
        
        }
        catch(PDOException $e){
            die("ERROR: Could not able to execute $sql. " . $e->getMessage());
        }


?>