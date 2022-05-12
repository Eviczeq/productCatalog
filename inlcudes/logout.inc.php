<?php
    require 'dbh.inc.php';
//log out
try {
if(isset($_POST['logout-submit'])){
    session_start();  
    session_unset(); // this one clears all var from sessiosn
    session_destroy();
    header("Location: ../index.php");
}
}
catch(PDOException $e){
        die("ERROR: Could not able to execute $sql. " . $e->getMessage());
    }    
    ?>