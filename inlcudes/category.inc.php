<?php
        
        $sql = "SELECT Category FROM placeholder GROUP BY Category ORDER BY Category ASC";
        $result = $conn->query($sql);
        $rows = $result->fetchAll(PDO::FETCH_COLUMN, 0);

        $sqlType = "SELECT Type FROM placeholder GROUP BY Type ORDER BY Type ASC";
        $resultType = $conn->query($sqlType);
        $rowsType = $resultType->fetchAll(PDO::FETCH_COLUMN, 0);
?>
