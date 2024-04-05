<?php

include 'reservering.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    try{
        $reservering = new Reservering($myDb);
        $reservering->addReservering($_POST['naam'], $_POST['tijd'], $_POST['datum']);
        header("Location: view-reservering.php");
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
    <h1>Reservering toevoegen</h1>
    <form method="POST">
    <div class="mb-3">
        <input type="text" name="naam" placeholder="Naam" required>
    </div>
    <div class="mb-3">
        <input type="time" name="tijd" placeholder="tijd" required>
    </div>
    <div class="mb-3">
        <input type="date" name="datum" placeholder="datum" required>
    </div>
        <input type="submit" class="btn btn-primary">
    </form>
    </div>
</body>

</body>

 
   

 

</html>