<?php
include_once('reservering.php');
 
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["ID"])) {
    $ID = $_GET["ID"];
    $reservering  = new Reservering($myDb);
    $reservering->deletereservering($ID);
}
 
header("Location:view-reservering.php");
exit();
?>