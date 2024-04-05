<?php
include_once('product.php');
 
$product  = new Product($myDb);
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $ID = $_POST["ID"];
        $naam = $_POST["naam"];
        $omschrijving = $_POST["omschrijving"];
        $prijs = $_POST["prijs"];
       
        $product->updateProduct($ID, $naam, $omschrijving, $prijs); // Let op de variabelenaam hier
        header("Location: view-product.php");
        exit;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
 
if (isset($_GET["ID"])) {
    $ID = $_GET["ID"];
    $Product = $product->getproductById($ID); // Let op de variabelenaam hier
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
        <h2>Bewerk product</h2>
        <form method="POST">
            <input type="hidden" name="ID" value="<?php echo $ID; ?>">
            <div class="mb-3">
                <label class="form-label">Naam:</label>
                <input type="text" class="form-control" name="naam" value="<?php echo $Product['naam']; ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">omschrijving:</label>
                <input type="text" class="form-control" name="email" value="<?php echo $Product['omschrijving']; ?>" required>
            </div>
        
            <div class="mb-3">
                <label class="form-label">prijs:</label>  
                <input type="price" class="form-control" name="prijs" required>
            </div>
            <button type="submit" class="btn btn-primary">Opslaan</button>
        </form>
    </div>
</body>
</html>
