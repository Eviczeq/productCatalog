<?php
    require "inlcudes/dbh.inc.php";
    // fetching rows into array
    $sth = $conn->prepare("SELECT Name FROM placeholder ");
    $sth->execute(array());
    $result = $sth->fetchAll(PDO::FETCH_COLUMN, 0);
$a=$result;
// Array with names
// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
    if ($q !== "") {
        $q = strtolower($q);
        $len=strlen($q);
        foreach ($a as $name) {
            if (stristr($q, substr($name, 0, $len))) {
                if ($hint === "") {
                    $hint = "<a href='item.php?id='>".$name."</a>";
                } else {
                    $hint .= ", <a href='#'>".$name."</a>";
                }
            }
        }
    }

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>