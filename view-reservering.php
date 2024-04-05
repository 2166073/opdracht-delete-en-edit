<?php
include 'reservering.php';

$reservering  = new Reservering($myDb);

$alles = $reservering->selectAllreservering()->fetchAll();

?>

<!DOCTYPE html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<html lang="en">
<head> 
   
</head>
<body>

<h1>tafel Overzicht</h1>
<table class="table table-dark">
    <tr>
    <th>ID</th>
    <th>naam</th>
    <th>tijd</th>
    <th>datum</th>
    <th colspan="2">Action</th>

    </tr>
    
    <tr>
        <?php foreach ($alles as $Reservering) {
            echo "<td>".$Reservering['ID']."</td>";
            echo "<td>".$Reservering['naam']."</td>";
            echo "<td>".$Reservering['tijd']."</td>";
            echo "<td>".$Reservering['datum']."</td>";
            echo "<td><a class='btn btn-primary' href='edit.php?ID=".$Reservering['ID']."'>EDIT</a><td>";
            echo "<td><a class='btn btn-danger' href='delete.php?ID=".$Reservering['ID']."'>DELETE</a><td>";
        
        
        
    ?>
    </tr>

   <?php } ?>
    </table>

</body>

 
   

 

</html>
