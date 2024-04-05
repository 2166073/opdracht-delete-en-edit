<?php
include 'tafel.php';


$tafel  = new Tafel($myDb);

$alles = $tafel->selectAlltafel()->fetchAll();

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
    <th>tafelnummer</th>
    <th>bijzonderheden</th>
    <th>max_persoon</th>
    <th colspan="2">Action</th>

    </tr>
    
    <tr>
        <?php foreach ($alles as $Tafel) {
            echo "<td>".$Tafel['ID']."</td>";
            echo "<td>".$Tafel['tafelnummer']."</td>";
            echo "<td>".$Tafel['bijzonderheden']."</td>";
            echo "<td>".$Tafel['max_persoon']."</td>";
            echo "<td><a class='btn btn-primary' href='edit.php?ID=".$Tafel['ID']."'>EDIT</a><td>";
            echo "<td><a class='btn btn-danger' href='delete.php?ID=".$Tafel['ID']."'>DELETE</a><td>";
        
        
        
    ?>
    </tr>

   <?php } ?>
    </table>

</body>

 
   

 

</html>
