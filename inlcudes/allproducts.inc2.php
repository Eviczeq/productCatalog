<?php
    require 'dbh.inc.php';

    $sql = "SELECT COUNT(*) FROM placeholder";
    $result = $conn->query($sql);
    $r = $result->fetch(PDO::FETCH_NUM);
    $numrows = $r[0];
    
    // number of rows to show per page
    $rowsperpage = 12;
    // find out total pages
    $totalpages = ceil($numrows / $rowsperpage);
    
    // get the current page or set a default
    if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
       // cast var as int
       $currentpage = (int) $_GET['currentpage'];
    } else {
       // default page num
       $currentpage = 1;
    } // end if
    
    // if current page is greater than total pages...
    if ($currentpage > $totalpages) {
       // set current page to last page
       $currentpage = $totalpages;
    } // end if
    // if current page is less than first page...
    if ($currentpage < 1) {
       // set current page to first page
       $currentpage = 1;
    } // end if
    
    // the offset of the list, based on current page 
    $offset = ($currentpage - 1) * $rowsperpage;
    
    // get the info from the db 
    $sql = "SELECT * FROM placeholder";
    $result = $conn->query($sql);
?>
