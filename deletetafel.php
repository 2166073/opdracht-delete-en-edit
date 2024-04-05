<?php
include_once('tafel.php');
 
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["ID"])) {
    $ID = $_GET["ID"];
    $tafel  = new Tafel($myDb);
    $tafel->deletetafel($ID);
}
 
header("Location:view-tafel.php");
exit();
?>