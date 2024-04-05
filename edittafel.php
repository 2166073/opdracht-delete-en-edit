<?php
include_once('tafel.php');
 
$tafel  = new Tafel($myDb);
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $ID = $_POST["ID"];
        $tafelnummer = $_POST["tafelnummer"];
        $bijzonderheden = $_POST["bijzonderheden"];
        $max_persoon = $_POST["max_persoon"];
       
        $tafel->updaTetafel($ID, $tafelnummer, $bijzonderheden, $max_persoon); // Let op de variabelenaam hier
        header("Location: view-tafel.php");
        exit;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
 
if (isset($_GET["ID"])) {
    $ID = $_GET["ID"];
    $Tafel = $tafel->gettafelById($ID); // Let op de variabelenaam hier
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
        <h2>Bewerk Tafel</h2>
        <form method="POST">
            <input type="hidden" name="ID" value="<?php echo $ID; ?>">
            
            <div class="mb-3">
                <label class="form-label">tafelnummer:</label>
                <input type="text" class="form-control" name="tafelnummer" value="<?php echo $Tafel['tafelnummer']; ?>" required>
            </div>
        
            <div class="mb-3">
                <label class="form-label">bijzonderheden:</label>
                <input type="text" class="form-control" name="bijzonderheden" value="<?php echo $Tafel['bijzonderheden']; ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">max_persoon:</label>  
                <input type="number" class="form-control" name="max_persoon" required>
            </div>
            <button type="submit" class="btn btn-primary">Opslaan</button>
        </form>
    </div>
</body>
</html>