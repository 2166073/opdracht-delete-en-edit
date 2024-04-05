<?php
include 'product.php';

$product  = new Product($myDb);

$alles = $product->selectAllproduct()->fetchAll();

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
    <th>omscrijving</th>
    <th>prijs</th>
    <th colspan="2">Action</th>

    </tr>
    
    <tr>
        <?php foreach ($alles as $Product) {
            echo "<td>".$Product['ID']."</td>";
            echo "<td>".$Product['naam']."</td>";
            echo "<td>".$Product['omschrijving']."</td>";
            echo "<td>".$Product['prijs']."</td>";
            echo "<td><a class='btn btn-primary' href='edit.php?ID=".$Product['ID']."'>EDIT</a><td>";
            echo "<td><a class='btn btn-primary' href='delete.php?ID=".$Product['ID']."'>DELETE</a><td>";
        
        
        
    ?>
    </tr>

   <?php } ?>
    </table>

</body>

 
   

 

</html>
