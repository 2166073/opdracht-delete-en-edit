<?php

include 'klant.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    try{
        $klant = new Klant($myDb);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $klant->addKlant($_POST['naam'], $_POST['email'], $password);
        echo "successfully added";
    } catch (Exception $e) {
        echo 'Error' . $e->getMessage();
        }
}


 

 
 
    ?>
 

<!DOCTYPE html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<html lang="en">
<head> 
   
</head>
<body>
<div class="d-flex flex-column align-items-center">
    <h1>Klant toevoegen</h1>
    <form method="POST">
    <div class="mb-3">
        <input type="text" name="naam" placeholder="Naam" required>
    </div>
    <div class="mb-3">
        <input type="email" name="email" placeholder="email" required>
    </div>
    <div class="mb-3">
        <input type="password" name="password" placeholder="password" required>
    </div>
        <input type="submit" class="btn btn-primary">
    </form>
    </div>

</body>

 
   

 

</html>