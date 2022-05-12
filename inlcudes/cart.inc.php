<?php
// If the user clicked the add to cart button on the product page we can check for the form data
if (isset($_POST['Number'], $_POST['Name'],$_POST['Price'],$_POST['Quantity'] ) ) {
    // Set the post variables so we easily identify them, also make sure they are integer
    $product_id1 =  intval($_POST['Number']);
    $quantity1 = intval($_POST['Quantity']);
    $price1 =intval($_POST['Price']);
    $name1 = $_POST['Name'];
    $supplier1 = $_POST['Supplier'];
    $_SESSION['Per'] =$_POST['Per'];
    $_SESSION['Number'] = $product_id1;
    $_SESSION['Quantity'] = $quantity1;
    $_SESSION['Price'] = $price1;
    $_SESSION['Name'] = $name1;
    $_SESSION['Supplier'] = $supplier1;

    $sql = "SELECT * FROM placeholder WHERE Number = $product_id1";
    $result = $conn->query($sql);
};
if (isset($_POST["add"])){
    if (isset($_SESSION["cart"])){
        $item_array_id = array_column($_SESSION["cart"],"product_id");
        if (!in_array($_GET["id"],$item_array_id)){
            $count = count($_SESSION["cart"]);
            $item_array = array(
                'product_id' => $_GET["id"],
                'item_name' => $_POST["Name"],
                'product_price' => $_POST["Price"],
                'item_quantity' => $_POST["Quantity"],
                'supplier' => $_POST["Supplier"],
                'per' =>$_POST["Per"]

            );
            $_SESSION["cart"][$count] = $item_array;
            echo '<script>window.location="shopping_cart.php"</script>';

        }else{
            echo '<script>alert("Product is already Added to Cart")</script>';
            echo '<script>window.location="shopping_cart.php"</script>';
        }
    }else{
        $item_array = array(
            'product_id' => $_GET["id"],
            'item_name' => $_POST["Name"],
            'product_price' => $_POST["Price"],
            'item_quantity' => $_POST["Quantity"],
            'supplier' => $_POST["Supplier"],
            'per' =>$_POST["Per"]

        );
        $_SESSION["cart"][0] = $item_array;
    }
}

if (isset($_GET["action"])){
    if ($_GET["action"] == "delete"){
        foreach ($_SESSION["cart"] as $keys => $value){
            if ($value["product_id"] == $_GET["id"]){
                unset($_SESSION["cart"][$keys]);
                echo '<script>alert("Product has been Removed...!")</script>';
                echo '<script>window.location="shopping_cart.php"</script>';
            }
        }
    }
}
if (isset($_GET["action"])) {
    if ($_GET["action"] == "update") {
        foreach ($_SESSION["cart"] as $keys => $value){
            if ($value["product_id"] == $_GET["id"]){
                $_SESSION["cart"][$keys]['item_quantity']=  $_POST['quantity'];
            //echo '<script>window.location="shopping_cart.php"</script>';

            }
        }
    }
}
if(isset($_POST["deleteAll"]) AND !empty($_SESSION)){
    session_unset();
} else{
    
}

?>