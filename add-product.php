<?php

include 'product.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    try{
        $product = new Product($myDb);
        $product->addProduct($_POST['naam'], $_POST['omschrijving'], $_POST['prijs']);
        header("Location: view-product.php");
    } catch (Exception $e) {
        echo 'Error' . $e->getMessage();
        }
}


 

 
 
    ?>
 

<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<head> 
   
</head>
<body>

<div class="d-flex flex-column align-items-center">
    <h1>Product toevoegen</h1>
    <form method="POST">
    <div class="mb-3">
        <input type="text" name="naam" placeholder="Naam" required>
    </div>
    <div class="mb-3">
        <input type="text" name="omschrijving" placeholder="omschrijving" required>
    </div>
    <div class="mb-3">
        <input type="price" name="prijs" placeholder="prijs" required>
    </div>
        <input type="submit" class="btn btn-primary">
    </form>
    </div>

</body>

 
   

 

</html>