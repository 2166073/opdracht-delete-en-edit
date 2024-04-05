
<?php
include 'rekening.php';
 
 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    try{
        $rekening = new Rekening($myDb);
        $rekening->addRekening($_POST['naam'], $_POST['tafelnummer'], $_POST['totaal_bedrag']);
        header("Location: view-rekening.php");
    } catch (Exception $e) {
        echo 'Error' . $e->getMessage();
        }
}
 
?>
 
 
<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="d-flex flex-column align-items-center">
    <h1>rekening toevoegen</h1>
    <form method="POST">
    <div class="mb-3">
        <input type="text" name="naam" placeholder="Naam" required>
    </div>
    <div class="mb-3">
        <input type="number" name="tafelnummer" placeholder="tafelnummer" required>
    </div>
    <div class="mb-3">
        <input type="price" name="totaal_bedrag" placeholder="totaal_bedrag" required>
    </div>
        <input type="submit" class="btn btn-primary">
    </form>
    </div>
</body>
</html>