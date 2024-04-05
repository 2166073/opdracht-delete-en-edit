<?php
include '../db.php';
   

 
 
 class Klant{
    private $dbh;

    public function __construct($dbh)
    {
        $this->dbh = $dbh;

    }
    public function addKlant($naam, $email, $password)
    {
        return $this->dbh->execute("INSERT INTO klant (naam, email, password)
        VALUES (?,?,?)",
        [$naam, $email, $password]);
    }

    public function selectAllKlanten(){
        return $this->dbh->execute("SELECT * FROM klant");
    }
    public function selectOneKlant($ID){
        return $this->dbh->execute("SELECT * FROM klant", [$ID]);
    }


    public function updateKlant($ID, $naam, $email, $password) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "UPDATE klant SET naam = ?,  email = ?,  password = ? WHERE ID = ?";
        return $this->dbh->execute($sql, array($naam, $email,  $hashedPassword, $ID));
    }
    

    public function getKlantById($ID) {
        $sql = "SELECT * FROM klant WHERE ID = ?";
        $stmt = $this->dbh->execute($sql, array($ID));
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function deleteKlant($ID) {
        $sql = "DELETE FROM klant WHERE ID = ?";
        return $this->dbh->execute($sql, array($ID));
    }
    
}


 
?>
 

 
