<?php
include_once('rekening.php');
 
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["ID"])) {
    $ID = $_GET["ID"];
    $rekening  = new Rekening($myDb);
    $rekening->deleterekening($ID);
}
 
header("Location:view-rekening.php");
exit();
?>