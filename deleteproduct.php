<?php
include_once('product.php');
 
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["ID"])) {
    $ID = $_GET["ID"];
    $product  = new Product($myDb);
    $product->deleteproduct($ID);
}
 
header("Location:view-product.php");
exit();
?>