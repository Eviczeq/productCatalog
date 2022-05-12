<?php
    require "dbh.inc.php";
    $id = intval($_GET['id']);
if(isset($_GET['action'])){
    if ($_GET["action"] === 'delete') {
        try {
            $sql = "DELETE FROM `placeholder` WHERE `placeholder`.`Number` = $id";
            $result = $conn ->query($sql);
            echo '<script>window.alert("Deleted")</script>';
            echo '<script>window.location="../product.php"</script>';
                } catch(PDOException $e){
            die("ERROR: Could not able to execute $sql. " . $e->getMessage());
        }
        
    }
}
?>