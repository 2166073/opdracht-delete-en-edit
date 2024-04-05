<?php
include_once('reservering.php');
 
$reservering  = new Reservering($myDb);
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $ID = $_POST["ID"];
        $naam = $_POST["naam"];
        $tijd = $_POST["tijd"];
        $datum = $_POST["datum"];
       
        $reservering->updateReservering($ID, $naam, $tijd, $datum); // Let op de variabelenaam hier
        header("Location: view-reservering.php");
        exit;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
 
if (isset($_GET["ID"])) {
    $ID = $_GET["ID"];
    $Reservering = $reservering->getreserveringById($ID); // Let op de variabelenaam hier
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Bewerk klant</title>
</head>
<body>
    <div class="container">
        <h2>Bewerk Reservering</h2>
        <form method="POST">
            <input type="hidden" name="ID" value="<?php echo $ID; ?>">
            
            <div class="mb-3">
                <label class="form-label">naam:</label>
                <input type="text" class="form-control" name="naam" value="<?php echo $Reservering['naam']; ?>" required>
            </div>
        
            <div class="mb-3">
                <label class="form-label">tijd:</label>
                <input type="text" class="form-control" name="tijd" value="<?php echo $Reservering['tijd']; ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">datum:</label>  
                <input type="date" class="form-control" name="datum" required>
            </div>
            <button type="submit" class="btn btn-primary">Opslaan</button>
        </form>
    </div>
</body>
</html>