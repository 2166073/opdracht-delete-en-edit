<?php
include 'rekening.php';



$rekening  = new Rekening($myDb);

$alles = $rekening->selectAllrekening()->fetchAll();

?>

<!DOCTYPE html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<html lang="en">
<head> 
   
</head>
<body>

<h1>product Overzicht</h1>
<table class="table table-dark">
    <tr>
    <th>ID</th>
    <th>naam</th>
    <th>tafelnummer</th>
    <th>totaal_bedrag</th>
    <th colspan="2">Action</th>

    </tr>
    
    <tr>
        <?php foreach ($alles as $Rekening) {
            echo "<td>".$Rekening['ID']."</td>";
            echo "<td>".$Rekening['naam']."</td>";
            echo "<td>".$Rekening['tafelnummer']."</td>";
            echo "<td>".$Rekening['totaal_bedrag']."</td>";
            echo "<td><a class='btn btn-primary' href='edit.php?ID=".$Rekening['ID']."'>EDIT</a><td>";
            echo "<td><a class='btn btn-danger' href='delete.php?ID=".$Rekening['ID']."'>DELETE</a><td>";
        
        
        
    ?>
    </tr>

   <?php } ?>
    </table>

</body>

 
   

 

</html>
