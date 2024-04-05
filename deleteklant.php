<?php
include_once('klant.php');
 
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["ID"])) {
    $ID = $_GET["ID"];
    $klanten  = new klant($myDb);
    $klanten->deleteKlant($ID);
}
 
header("Location:view-klant.php");
exit();
?>