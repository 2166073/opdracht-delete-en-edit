<?php

include 'tafel.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    try{
        $tafel = new Tafel($myDb);
        $tafel->addTafel($_POST['tafelnummer'], $_POST['bijzonderheden'], $_POST['max_persoon']);
        header("Location: view-tafel.php");
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

<body>
    <div class="d-flex flex-column align-items-center">
    <h1>Tafel toevoegen</h1>
    <form method="POST">
    <div class="mb-3">
        <input type="number" name="tafelnummer" placeholder="tafelnummer" required>
    </div>
    <div class="mb-3">
        <input type="text" name="bijzonderheden" placeholder="bijzonderheden" required>
    </div>
    <div class="mb-3">
        <input type="number" name="max_persoon" placeholder="max_persoon" required>
    </div>
        <input type="submit" class="btn btn-primary">
    </form>
    </div>
</body>

</body>

 
   

 

</html>