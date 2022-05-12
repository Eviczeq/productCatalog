<?php
        $id=htmlspecialchars($_GET["id"]);
        $sql = "SELECT * FROM placeholder WHERE Number = $id";
        $result = $conn->query($sql);
        $row = $result->fetch(PDO::FETCH_NUM);
?>