<?php
include 'klant.php';
$klanten  = new klant($myDb);

$alles = $klanten->selectAllKlanten()->fetchAll();

?>

<!DOCTYPE html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<html lang="en">
<head> 
   
</head>
<body>

<h1>Klant Overzicht</h1>
<table class="table table-dark">
    <tr>
    <th>ID</th>
    <th>naam</th>
    <th>email</th>
    <th>password</th>
    <th colspan="2">Action</th>

    </tr>
    
    <tr>
        <?php foreach ($alles as $klant) {
            echo "<td>".$klant['ID']."</td>";
            echo "<td>".$klant['naam']."</td>";
            echo "<td>".$klant['email']."</td>";
            echo "<td>".$klant['password']."</td>";
            echo "<td><a class='btn btn-primary' href='edit.php?ID=".$klant['ID']."'>EDIT</a><td>";
            echo "<td><a class='btn btn-primary' href='delete.php?ID=".$klant['ID']."'>DELETE</a><td>";
        
        
        
        ?>
    </tr>

   <?php } ?>
    </table>

</body>

 
   

 

</html>