<?php
include '../db.php';
   

 
 
 class Product{
    private $dbh;

    public function __construct($dbh)
    {
        $this->dbh = $dbh;

    }
    public function addProduct($naam, $omschrijving, $prijs)
    {
        return $this->dbh->execute("INSERT INTO Product (naam, omschrijving, prijs)
        VALUES (?,?,?)",
        [$naam, $omschrijving, $prijs]);
    }

    public function selectAllproduct(){
        return $this->dbh->execute("SELECT * FROM product");
    }

    public function updateProduct($ID, $naam, $omschrijving, $prijs) {
        $sql = "UPDATE product SET naam = ?,  omschrijving = ?,  prijs = ? WHERE ID = ?";
        return $this->dbh->execute($sql, array($naam, $omschrijving, $prijs,  $ID));
    }
    

    public function getproductById($ID) {
        $sql = "SELECT * FROM product WHERE ID = ?";
        $stmt = $this->dbh->execute($sql, array($ID));
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function deleteproduct($ID) {
        $sql = "DELETE FROM product WHERE ID = ?";
        return $this->dbh->execute($sql, array($ID));
    }
    
}
 
?>